<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;

class DescribeInvadeEventDetailRequest extends Model
{
    /**
     * @var string
     */
    public $assetsInstanceId;

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
    public $publicIP;

    /**
     * @var string
     */
    public $sourceIp;
    protected $_name = [
        'assetsInstanceId' => 'AssetsInstanceId',
        'eventUuid' => 'EventUuid',
        'lang' => 'Lang',
        'publicIP' => 'PublicIP',
        'sourceIp' => 'SourceIp',
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

        if (null !== $this->eventUuid) {
            $res['EventUuid'] = $this->eventUuid;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->publicIP) {
            $res['PublicIP'] = $this->publicIP;
        }

        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
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

        if (isset($map['EventUuid'])) {
            $model->eventUuid = $map['EventUuid'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['PublicIP'])) {
            $model->publicIP = $map['PublicIP'];
        }

        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }

        return $model;
    }
}
