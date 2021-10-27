<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models;

use AlibabaCloud\Tea\Model;

class CreateWhitelistSettingRequest extends Model
{
    /**
     * @var string
     */
    public $certNo;

    /**
     * @var string
     */
    public $certifyId;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var int
     */
    public $sceneId;

    /**
     * @var string
     */
    public $serviceCode;

    /**
     * @var string
     */
    public $sourceIp;

    /**
     * @var int
     */
    public $validDay;
    protected $_name = [
        'certNo'      => 'CertNo',
        'certifyId'   => 'CertifyId',
        'lang'        => 'Lang',
        'sceneId'     => 'SceneId',
        'serviceCode' => 'ServiceCode',
        'sourceIp'    => 'SourceIp',
        'validDay'    => 'ValidDay',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->certNo) {
            $res['CertNo'] = $this->certNo;
        }
        if (null !== $this->certifyId) {
            $res['CertifyId'] = $this->certifyId;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->sceneId) {
            $res['SceneId'] = $this->sceneId;
        }
        if (null !== $this->serviceCode) {
            $res['ServiceCode'] = $this->serviceCode;
        }
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->validDay) {
            $res['ValidDay'] = $this->validDay;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateWhitelistSettingRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CertNo'])) {
            $model->certNo = $map['CertNo'];
        }
        if (isset($map['CertifyId'])) {
            $model->certifyId = $map['CertifyId'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['SceneId'])) {
            $model->sceneId = $map['SceneId'];
        }
        if (isset($map['ServiceCode'])) {
            $model->serviceCode = $map['ServiceCode'];
        }
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['ValidDay'])) {
            $model->validDay = $map['ValidDay'];
        }

        return $model;
    }
}
