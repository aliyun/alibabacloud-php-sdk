<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetPptTemplateSelectorResponseBody\data;

use AlibabaCloud\Dara\Model;

class career extends Model
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var int
     */
    public $isHot;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'id' => 'Id',
        'isHot' => 'IsHot',
        'name' => 'Name',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->isHot) {
            $res['IsHot'] = $this->isHot;
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
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['IsHot'])) {
            $model->isHot = $map['IsHot'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
