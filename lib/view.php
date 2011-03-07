<?

function map_link_for($obj)
{
  $html = "<a href='http://maps.google.com/maps?q=".u($obj->address)."' target='_blank'>map</a>";
  return $html;
}