<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeGraph4InvestigationOnlineResponseBody\data;

use AlibabaCloud\Tea\Model;

class entityTypeList extends Model
{
    /**
     * @description Vertex rendering color.
     *
     * @example #fff
     *
     * @var string
     */
    public $displayColor;

    /**
     * @description Vertex icon.
     *
     * @example https://img.alicdn.com/tfs/TB176P5OgDqK1RjSZSyXXaxEVXa-49-48.png
     *
     * @var string
     */
    public $displayIcon;

    /**
     * @description Display order
     *
     * @example 1
     *
     * @var int
     */
    public $displayOrder;

    /**
     * @description Node type ID.
     *
     * @example 1
     *
     * @var string
     */
    public $id;

    /**
     * @description Vertex name.
     *
     * @example alert
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'displayColor' => 'DisplayColor',
        'displayIcon'  => 'DisplayIcon',
        'displayOrder' => 'DisplayOrder',
        'id'           => 'Id',
        'name'         => 'Name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->displayColor) {
            $res['DisplayColor'] = $this->displayColor;
        }
        if (null !== $this->displayIcon) {
            $res['DisplayIcon'] = $this->displayIcon;
        }
        if (null !== $this->displayOrder) {
            $res['DisplayOrder'] = $this->displayOrder;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return entityTypeList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DisplayColor'])) {
            $model->displayColor = $map['DisplayColor'];
        }
        if (isset($map['DisplayIcon'])) {
            $model->displayIcon = $map['DisplayIcon'];
        }
        if (isset($map['DisplayOrder'])) {
            $model->displayOrder = $map['DisplayOrder'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
