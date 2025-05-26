<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dm\V20151123\Models\ListUserSuppressionResponseBody\data;

use AlibabaCloud\Dara\Model;

class userSuppressions extends Model
{
    /**
     * @var string
     */
    public $address;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var int
     */
    public $lastBounceTime;

    /**
     * @var int
     */
    public $suppressionId;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'address' => 'Address',
        'createTime' => 'CreateTime',
        'lastBounceTime' => 'LastBounceTime',
        'suppressionId' => 'SuppressionId',
        'type' => 'Type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->address) {
            $res['Address'] = $this->address;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->lastBounceTime) {
            $res['LastBounceTime'] = $this->lastBounceTime;
        }

        if (null !== $this->suppressionId) {
            $res['SuppressionId'] = $this->suppressionId;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['Address'])) {
            $model->address = $map['Address'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['LastBounceTime'])) {
            $model->lastBounceTime = $map['LastBounceTime'];
        }

        if (isset($map['SuppressionId'])) {
            $model->suppressionId = $map['SuppressionId'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
