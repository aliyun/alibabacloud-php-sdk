<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeUserStatusResponseBody;

use AlibabaCloud\Tea\Model;

class userStatus extends Model
{
    /**
     * @var string
     */
    public $accessKeyId;

    /**
     * @var bool
     */
    public $authed;

    /**
     * @var string
     */
    public $chargeType;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $instanceNum;

    /**
     * @var int
     */
    public $labStatus;

    /**
     * @var bool
     */
    public $purchased;

    /**
     * @var int
     */
    public $remainDays;

    /**
     * @var bool
     */
    public $trail;

    /**
     * @var int
     */
    public $useInstanceNum;

    /**
     * @var int
     */
    public $useOssSize;
    protected $_name = [
        'accessKeyId'    => 'AccessKeyId',
        'authed'         => 'Authed',
        'chargeType'     => 'ChargeType',
        'instanceId'     => 'InstanceId',
        'instanceNum'    => 'InstanceNum',
        'labStatus'      => 'LabStatus',
        'purchased'      => 'Purchased',
        'remainDays'     => 'RemainDays',
        'trail'          => 'Trail',
        'useInstanceNum' => 'UseInstanceNum',
        'useOssSize'     => 'UseOssSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessKeyId) {
            $res['AccessKeyId'] = $this->accessKeyId;
        }
        if (null !== $this->authed) {
            $res['Authed'] = $this->authed;
        }
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceNum) {
            $res['InstanceNum'] = $this->instanceNum;
        }
        if (null !== $this->labStatus) {
            $res['LabStatus'] = $this->labStatus;
        }
        if (null !== $this->purchased) {
            $res['Purchased'] = $this->purchased;
        }
        if (null !== $this->remainDays) {
            $res['RemainDays'] = $this->remainDays;
        }
        if (null !== $this->trail) {
            $res['Trail'] = $this->trail;
        }
        if (null !== $this->useInstanceNum) {
            $res['UseInstanceNum'] = $this->useInstanceNum;
        }
        if (null !== $this->useOssSize) {
            $res['UseOssSize'] = $this->useOssSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return userStatus
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessKeyId'])) {
            $model->accessKeyId = $map['AccessKeyId'];
        }
        if (isset($map['Authed'])) {
            $model->authed = $map['Authed'];
        }
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceNum'])) {
            $model->instanceNum = $map['InstanceNum'];
        }
        if (isset($map['LabStatus'])) {
            $model->labStatus = $map['LabStatus'];
        }
        if (isset($map['Purchased'])) {
            $model->purchased = $map['Purchased'];
        }
        if (isset($map['RemainDays'])) {
            $model->remainDays = $map['RemainDays'];
        }
        if (isset($map['Trail'])) {
            $model->trail = $map['Trail'];
        }
        if (isset($map['UseInstanceNum'])) {
            $model->useInstanceNum = $map['UseInstanceNum'];
        }
        if (isset($map['UseOssSize'])) {
            $model->useOssSize = $map['UseOssSize'];
        }

        return $model;
    }
}
