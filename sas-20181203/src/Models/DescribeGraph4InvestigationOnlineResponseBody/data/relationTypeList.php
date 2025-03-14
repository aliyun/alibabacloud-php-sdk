<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeGraph4InvestigationOnlineResponseBody\data;

use AlibabaCloud\Tea\Model;

class relationTypeList extends Model
{
    /**
     * @description Direction of the edge. Possible values:
     * - **1** ： Forward
     * - **0**： Reverse
     *
     * @example 1
     *
     * @var int
     */
    public $directed;

    /**
     * @description Render color of the edge.
     *
     * @example #fff
     *
     * @var string
     */
    public $displayColor;

    /**
     * @description Icon style of the edge
     *
     * @example https://img.alicdn.com/imgextra/i4/O1CN01ft6rvQ22uUX2JsTmv_!!6000000007180-55-tps-12-12.svg
     *
     * @var string
     */
    public $displayIcon;

    /**
     * @description Name of the edge.
     *
     * @example spawn process
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'directed' => 'Directed',
        'displayColor' => 'DisplayColor',
        'displayIcon' => 'DisplayIcon',
        'name' => 'Name',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->directed) {
            $res['Directed'] = $this->directed;
        }
        if (null !== $this->displayColor) {
            $res['DisplayColor'] = $this->displayColor;
        }
        if (null !== $this->displayIcon) {
            $res['DisplayIcon'] = $this->displayIcon;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return relationTypeList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Directed'])) {
            $model->directed = $map['Directed'];
        }
        if (isset($map['DisplayColor'])) {
            $model->displayColor = $map['DisplayColor'];
        }
        if (isset($map['DisplayIcon'])) {
            $model->displayIcon = $map['DisplayIcon'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
