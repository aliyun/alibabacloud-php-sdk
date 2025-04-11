<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeGrantRulesToResourceResponseBody;

use AlibabaCloud\Dara\Model;

class grantRules extends Model
{
    /**
     * @var string
     */
    public $cenId;

    /**
     * @var int
     */
    public $cenOwnerId;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $orderType;
    protected $_name = [
        'cenId' => 'CenId',
        'cenOwnerId' => 'CenOwnerId',
        'createTime' => 'CreateTime',
        'orderType' => 'OrderType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cenId) {
            $res['CenId'] = $this->cenId;
        }

        if (null !== $this->cenOwnerId) {
            $res['CenOwnerId'] = $this->cenOwnerId;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->orderType) {
            $res['OrderType'] = $this->orderType;
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
        if (isset($map['CenId'])) {
            $model->cenId = $map['CenId'];
        }

        if (isset($map['CenOwnerId'])) {
            $model->cenOwnerId = $map['CenOwnerId'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['OrderType'])) {
            $model->orderType = $map['OrderType'];
        }

        return $model;
    }
}
