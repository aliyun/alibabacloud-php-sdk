<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeGraph4InvestigationOnlineResponseBody\data;

use AlibabaCloud\Dara\Model;

class entityTypeList extends Model
{
    /**
     * @var string
     */
    public $displayColor;
    /**
     * @var string
     */
    public $displayIcon;
    /**
     * @var int
     */
    public $displayOrder;
    /**
     * @var string
     */
    public $id;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
