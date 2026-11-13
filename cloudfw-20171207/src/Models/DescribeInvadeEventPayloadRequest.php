<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;

class DescribeInvadeEventPayloadRequest extends Model
{
    /**
     * @var string
     */
    public $assetsInstanceId;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $eventUuid;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $privateIP;

    /**
     * @var string
     */
    public $publicIP;

    /**
     * @var string
     */
    public $sourceIp;

    /**
     * @var string
     */
    public $startTime;
    protected $_name = [
        'assetsInstanceId' => 'AssetsInstanceId',
        'endTime' => 'EndTime',
        'eventUuid' => 'EventUuid',
        'lang' => 'Lang',
        'privateIP' => 'PrivateIP',
        'publicIP' => 'PublicIP',
        'sourceIp' => 'SourceIp',
        'startTime' => 'StartTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->assetsInstanceId) {
            $res['AssetsInstanceId'] = $this->assetsInstanceId;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->eventUuid) {
            $res['EventUuid'] = $this->eventUuid;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->privateIP) {
            $res['PrivateIP'] = $this->privateIP;
        }

        if (null !== $this->publicIP) {
            $res['PublicIP'] = $this->publicIP;
        }

        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
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
        if (isset($map['AssetsInstanceId'])) {
            $model->assetsInstanceId = $map['AssetsInstanceId'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['EventUuid'])) {
            $model->eventUuid = $map['EventUuid'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['PrivateIP'])) {
            $model->privateIP = $map['PrivateIP'];
        }

        if (isset($map['PublicIP'])) {
            $model->publicIP = $map['PublicIP'];
        }

        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
