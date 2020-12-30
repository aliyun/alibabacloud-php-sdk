<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauthconsole\V20190219\Models\DescribeIdentifyRecordListResponseBody;

use AlibabaCloud\Tea\Model;

class recordList extends Model
{
    /**
     * @var string
     */
    public $capturedImage;

    /**
     * @var string
     */
    public $deviceName;

    /**
     * @var string
     */
    public $groupName;

    /**
     * @var int
     */
    public $userId;

    /**
     * @var string
     */
    public $identifyingImage;

    /**
     * @var int
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $userName;

    /**
     * @var string
     */
    public $iotId;
    protected $_name = [
        'capturedImage'    => 'CapturedImage',
        'deviceName'       => 'DeviceName',
        'groupName'        => 'GroupName',
        'userId'           => 'UserId',
        'identifyingImage' => 'IdentifyingImage',
        'gmtCreate'        => 'GmtCreate',
        'userName'         => 'UserName',
        'iotId'            => 'IotId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->capturedImage) {
            $res['CapturedImage'] = $this->capturedImage;
        }
        if (null !== $this->deviceName) {
            $res['DeviceName'] = $this->deviceName;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->identifyingImage) {
            $res['IdentifyingImage'] = $this->identifyingImage;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }
        if (null !== $this->iotId) {
            $res['IotId'] = $this->iotId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return recordList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CapturedImage'])) {
            $model->capturedImage = $map['CapturedImage'];
        }
        if (isset($map['DeviceName'])) {
            $model->deviceName = $map['DeviceName'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['IdentifyingImage'])) {
            $model->identifyingImage = $map['IdentifyingImage'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }
        if (isset($map['IotId'])) {
            $model->iotId = $map['IotId'];
        }

        return $model;
    }
}
