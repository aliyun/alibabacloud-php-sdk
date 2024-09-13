<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models;

use AlibabaCloud\Tea\Model;

class InsertWhiteListSettingRequest extends Model
{
    /**
     * @example 330103xxxxxxxxxxxx
     *
     * @var string
     */
    public $certNo;

    /**
     * @example shsf57a4e0d9981c3bd66dc754f3d3cd
     *
     * @var string
     */
    public $certifyId;

    /**
     * @example xxxxxx
     *
     * @var string
     */
    public $remark;

    /**
     * @example 100000xxxx
     *
     * @var int
     */
    public $sceneId;

    /**
     * @example antcloudauth
     *
     * @var string
     */
    public $serviceCode;

    /**
     * @example 30
     *
     * @var int
     */
    public $validDay;
    protected $_name = [
        'certNo'      => 'CertNo',
        'certifyId'   => 'CertifyId',
        'remark'      => 'Remark',
        'sceneId'     => 'SceneId',
        'serviceCode' => 'ServiceCode',
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
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->sceneId) {
            $res['SceneId'] = $this->sceneId;
        }
        if (null !== $this->serviceCode) {
            $res['ServiceCode'] = $this->serviceCode;
        }
        if (null !== $this->validDay) {
            $res['ValidDay'] = $this->validDay;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return InsertWhiteListSettingRequest
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
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['SceneId'])) {
            $model->sceneId = $map['SceneId'];
        }
        if (isset($map['ServiceCode'])) {
            $model->serviceCode = $map['ServiceCode'];
        }
        if (isset($map['ValidDay'])) {
            $model->validDay = $map['ValidDay'];
        }

        return $model;
    }
}
