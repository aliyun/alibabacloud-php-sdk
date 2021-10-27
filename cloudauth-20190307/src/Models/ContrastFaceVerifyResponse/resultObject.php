<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models\ContrastFaceVerifyResponse;

use AlibabaCloud\Tea\Model;

class resultObject extends Model
{
    /**
     * @var string
     */
    public $certifyId;

    /**
     * @var string
     */
    public $identityInfo;

    /**
     * @var string
     */
    public $materialInfo;

    /**
     * @var string
     */
    public $passed;

    /**
     * @var string
     */
    public $subCode;
    protected $_name = [
        'certifyId'    => 'CertifyId',
        'identityInfo' => 'IdentityInfo',
        'materialInfo' => 'MaterialInfo',
        'passed'       => 'Passed',
        'subCode'      => 'SubCode',
    ];

    public function validate()
    {
        Model::validateRequired('certifyId', $this->certifyId, true);
        Model::validateRequired('identityInfo', $this->identityInfo, true);
        Model::validateRequired('materialInfo', $this->materialInfo, true);
        Model::validateRequired('passed', $this->passed, true);
        Model::validateRequired('subCode', $this->subCode, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->certifyId) {
            $res['CertifyId'] = $this->certifyId;
        }
        if (null !== $this->identityInfo) {
            $res['IdentityInfo'] = $this->identityInfo;
        }
        if (null !== $this->materialInfo) {
            $res['MaterialInfo'] = $this->materialInfo;
        }
        if (null !== $this->passed) {
            $res['Passed'] = $this->passed;
        }
        if (null !== $this->subCode) {
            $res['SubCode'] = $this->subCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resultObject
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CertifyId'])) {
            $model->certifyId = $map['CertifyId'];
        }
        if (isset($map['IdentityInfo'])) {
            $model->identityInfo = $map['IdentityInfo'];
        }
        if (isset($map['MaterialInfo'])) {
            $model->materialInfo = $map['MaterialInfo'];
        }
        if (isset($map['Passed'])) {
            $model->passed = $map['Passed'];
        }
        if (isset($map['SubCode'])) {
            $model->subCode = $map['SubCode'];
        }

        return $model;
    }
}
