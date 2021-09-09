<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models;

use AlibabaCloud\Tea\Model;

class CreateWhitelistSettingRequest extends Model
{
    /**
     * @var string
     */
    public $sourceIp;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $serviceCode;

    /**
     * @var int
     */
    public $sceneId;

    /**
     * @var string
     */
    public $certifyId;

    /**
     * @var string
     */
    public $certNo;

    /**
     * @var int
     */
    public $validDay;
    protected $_name = [
        'sourceIp'    => 'SourceIp',
        'lang'        => 'Lang',
        'serviceCode' => 'ServiceCode',
        'sceneId'     => 'SceneId',
        'certifyId'   => 'CertifyId',
        'certNo'      => 'CertNo',
        'validDay'    => 'ValidDay',
    ];

    public function validate()
    {
        Model::validateRequired('serviceCode', $this->serviceCode, true);
        Model::validateRequired('validDay', $this->validDay, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->serviceCode) {
            $res['ServiceCode'] = $this->serviceCode;
        }
        if (null !== $this->sceneId) {
            $res['SceneId'] = $this->sceneId;
        }
        if (null !== $this->certifyId) {
            $res['CertifyId'] = $this->certifyId;
        }
        if (null !== $this->certNo) {
            $res['CertNo'] = $this->certNo;
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
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['ServiceCode'])) {
            $model->serviceCode = $map['ServiceCode'];
        }
        if (isset($map['SceneId'])) {
            $model->sceneId = $map['SceneId'];
        }
        if (isset($map['CertifyId'])) {
            $model->certifyId = $map['CertifyId'];
        }
        if (isset($map['CertNo'])) {
            $model->certNo = $map['CertNo'];
        }
        if (isset($map['ValidDay'])) {
            $model->validDay = $map['ValidDay'];
        }

        return $model;
    }
}
