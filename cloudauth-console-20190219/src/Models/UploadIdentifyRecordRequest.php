<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauthconsole\V20190219\Models;

use AlibabaCloud\Tea\Model;

class UploadIdentifyRecordRequest extends Model
{
    /**
     * @var string
     */
    public $sourceIp;

    /**
     * @var int
     */
    public $userId;

    /**
     * @var string
     */
    public $userName;

    /**
     * @var string
     */
    public $projectId;

    /**
     * @var string
     */
    public $iotId;

    /**
     * @var string
     */
    public $identifyingImageBase64;

    /**
     * @var int
     */
    public $identifyingTime;

    /**
     * @var string
     */
    public $identifyingImageUrl;

    /**
     * @var string
     */
    public $deviceName;
    protected $_name = [
        'sourceIp'               => 'SourceIp',
        'userId'                 => 'UserId',
        'userName'               => 'UserName',
        'projectId'              => 'ProjectId',
        'iotId'                  => 'IotId',
        'identifyingImageBase64' => 'IdentifyingImageBase64',
        'identifyingTime'        => 'IdentifyingTime',
        'identifyingImageUrl'    => 'IdentifyingImageUrl',
        'deviceName'             => 'DeviceName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->iotId) {
            $res['IotId'] = $this->iotId;
        }
        if (null !== $this->identifyingImageBase64) {
            $res['IdentifyingImageBase64'] = $this->identifyingImageBase64;
        }
        if (null !== $this->identifyingTime) {
            $res['IdentifyingTime'] = $this->identifyingTime;
        }
        if (null !== $this->identifyingImageUrl) {
            $res['IdentifyingImageUrl'] = $this->identifyingImageUrl;
        }
        if (null !== $this->deviceName) {
            $res['DeviceName'] = $this->deviceName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UploadIdentifyRecordRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['IotId'])) {
            $model->iotId = $map['IotId'];
        }
        if (isset($map['IdentifyingImageBase64'])) {
            $model->identifyingImageBase64 = $map['IdentifyingImageBase64'];
        }
        if (isset($map['IdentifyingTime'])) {
            $model->identifyingTime = $map['IdentifyingTime'];
        }
        if (isset($map['IdentifyingImageUrl'])) {
            $model->identifyingImageUrl = $map['IdentifyingImageUrl'];
        }
        if (isset($map['DeviceName'])) {
            $model->deviceName = $map['DeviceName'];
        }

        return $model;
    }
}
