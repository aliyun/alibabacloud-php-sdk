<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeRiskEventTopAttackAssetResponseBody;

use AlibabaCloud\Dara\Model;

class assets extends Model
{
    /**
     * @var int
     */
    public $attackCnt;

    /**
     * @var int
     */
    public $dropCnt;

    /**
     * @var string
     */
    public $ip;

    /**
     * @var string
     */
    public $regionNo;

    /**
     * @var string
     */
    public $resourceInstanceId;

    /**
     * @var string
     */
    public $resourceInstanceName;

    /**
     * @var string
     */
    public $resourceType;
    protected $_name = [
        'attackCnt' => 'AttackCnt',
        'dropCnt' => 'DropCnt',
        'ip' => 'Ip',
        'regionNo' => 'RegionNo',
        'resourceInstanceId' => 'ResourceInstanceId',
        'resourceInstanceName' => 'ResourceInstanceName',
        'resourceType' => 'ResourceType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attackCnt) {
            $res['AttackCnt'] = $this->attackCnt;
        }

        if (null !== $this->dropCnt) {
            $res['DropCnt'] = $this->dropCnt;
        }

        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }

        if (null !== $this->regionNo) {
            $res['RegionNo'] = $this->regionNo;
        }

        if (null !== $this->resourceInstanceId) {
            $res['ResourceInstanceId'] = $this->resourceInstanceId;
        }

        if (null !== $this->resourceInstanceName) {
            $res['ResourceInstanceName'] = $this->resourceInstanceName;
        }

        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
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
        if (isset($map['AttackCnt'])) {
            $model->attackCnt = $map['AttackCnt'];
        }

        if (isset($map['DropCnt'])) {
            $model->dropCnt = $map['DropCnt'];
        }

        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }

        if (isset($map['RegionNo'])) {
            $model->regionNo = $map['RegionNo'];
        }

        if (isset($map['ResourceInstanceId'])) {
            $model->resourceInstanceId = $map['ResourceInstanceId'];
        }

        if (isset($map['ResourceInstanceName'])) {
            $model->resourceInstanceName = $map['ResourceInstanceName'];
        }

        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        return $model;
    }
}
