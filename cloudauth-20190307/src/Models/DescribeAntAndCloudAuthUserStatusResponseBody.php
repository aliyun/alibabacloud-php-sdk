<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models;

use AlibabaCloud\Dara\Model;

class DescribeAntAndCloudAuthUserStatusResponseBody extends Model
{
    /**
     * @var bool
     */
    public $antcloudauthEnabled;

    /**
     * @var bool
     */
    public $cloudauthEnabled;

    /**
     * @var bool
     */
    public $cloudauthstEnabled;

    /**
     * @var bool
     */
    public $inforverifyEnabled;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'antcloudauthEnabled' => 'AntcloudauthEnabled',
        'cloudauthEnabled' => 'CloudauthEnabled',
        'cloudauthstEnabled' => 'CloudauthstEnabled',
        'inforverifyEnabled' => 'InforverifyEnabled',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->antcloudauthEnabled) {
            $res['AntcloudauthEnabled'] = $this->antcloudauthEnabled;
        }

        if (null !== $this->cloudauthEnabled) {
            $res['CloudauthEnabled'] = $this->cloudauthEnabled;
        }

        if (null !== $this->cloudauthstEnabled) {
            $res['CloudauthstEnabled'] = $this->cloudauthstEnabled;
        }

        if (null !== $this->inforverifyEnabled) {
            $res['InforverifyEnabled'] = $this->inforverifyEnabled;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['AntcloudauthEnabled'])) {
            $model->antcloudauthEnabled = $map['AntcloudauthEnabled'];
        }

        if (isset($map['CloudauthEnabled'])) {
            $model->cloudauthEnabled = $map['CloudauthEnabled'];
        }

        if (isset($map['CloudauthstEnabled'])) {
            $model->cloudauthstEnabled = $map['CloudauthstEnabled'];
        }

        if (isset($map['InforverifyEnabled'])) {
            $model->inforverifyEnabled = $map['InforverifyEnabled'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
