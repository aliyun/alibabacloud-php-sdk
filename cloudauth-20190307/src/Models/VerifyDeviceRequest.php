<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models;

use AlibabaCloud\Tea\Model;

class VerifyDeviceRequest extends Model
{
    /**
     * @var string
     */
    public $certifyId;

    /**
     * @var string
     */
    public $certifyData;

    /**
     * @var string
     */
    public $appVersion;

    /**
     * @var string
     */
    public $extInfo;
    protected $_name = [
        'certifyId'   => 'CertifyId',
        'certifyData' => 'CertifyData',
        'appVersion'  => 'AppVersion',
        'extInfo'     => 'ExtInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->certifyId) {
            $res['CertifyId'] = $this->certifyId;
        }
        if (null !== $this->certifyData) {
            $res['CertifyData'] = $this->certifyData;
        }
        if (null !== $this->appVersion) {
            $res['AppVersion'] = $this->appVersion;
        }
        if (null !== $this->extInfo) {
            $res['ExtInfo'] = $this->extInfo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return VerifyDeviceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CertifyId'])) {
            $model->certifyId = $map['CertifyId'];
        }
        if (isset($map['CertifyData'])) {
            $model->certifyData = $map['CertifyData'];
        }
        if (isset($map['AppVersion'])) {
            $model->appVersion = $map['AppVersion'];
        }
        if (isset($map['ExtInfo'])) {
            $model->extInfo = $map['ExtInfo'];
        }

        return $model;
    }
}
