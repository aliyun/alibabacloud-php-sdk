<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180208\Models\QueryBrokerDemandRecordResponseBody\data;

use AlibabaCloud\Tea\Model;

class brokerDemandRecord extends Model
{
    /**
     * @example SE20183A0Q7C5556
     *
     * @var string
     */
    public $bizId;

    /**
     * @example 1525249317000
     *
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $description;
    protected $_name = [
        'bizId'       => 'BizId',
        'createTime'  => 'CreateTime',
        'description' => 'Description',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return brokerDemandRecord
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        return $model;
    }
}
