<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dm\V20151123\Models;

use AlibabaCloud\Dara\Model;

class DedicatedIpPoolUpdateRequest extends Model
{
    /**
     * @var string
     */
    public $buyResourceIds;

    /**
     * @var string
     */
    public $id;

    /**
     * @var bool
     */
    public $updateResource;
    protected $_name = [
        'buyResourceIds' => 'BuyResourceIds',
        'id' => 'Id',
        'updateResource' => 'UpdateResource',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->buyResourceIds) {
            $res['BuyResourceIds'] = $this->buyResourceIds;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->updateResource) {
            $res['UpdateResource'] = $this->updateResource;
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
        if (isset($map['BuyResourceIds'])) {
            $model->buyResourceIds = $map['BuyResourceIds'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['UpdateResource'])) {
            $model->updateResource = $map['UpdateResource'];
        }

        return $model;
    }
}
