<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models\LivenessFaceVerifyResponse;

use AlibabaCloud\Tea\Model;

class resultObject extends Model
{
    /**
     * @var string
     */
    public $passed;

    /**
     * @var string
     */
    public $materialInfo;

    /**
     * @var string
     */
    public $subCode;

    /**
     * @var string
     */
    public $certifyId;
    protected $_name = [
        'passed'       => 'Passed',
        'materialInfo' => 'MaterialInfo',
        'subCode'      => 'SubCode',
        'certifyId'    => 'CertifyId',
    ];

    public function validate()
    {
        Model::validateRequired('passed', $this->passed, true);
        Model::validateRequired('materialInfo', $this->materialInfo, true);
        Model::validateRequired('subCode', $this->subCode, true);
        Model::validateRequired('certifyId', $this->certifyId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->passed) {
            $res['Passed'] = $this->passed;
        }
        if (null !== $this->materialInfo) {
            $res['MaterialInfo'] = $this->materialInfo;
        }
        if (null !== $this->subCode) {
            $res['SubCode'] = $this->subCode;
        }
        if (null !== $this->certifyId) {
            $res['CertifyId'] = $this->certifyId;
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
        if (isset($map['Passed'])) {
            $model->passed = $map['Passed'];
        }
        if (isset($map['MaterialInfo'])) {
            $model->materialInfo = $map['MaterialInfo'];
        }
        if (isset($map['SubCode'])) {
            $model->subCode = $map['SubCode'];
        }
        if (isset($map['CertifyId'])) {
            $model->certifyId = $map['CertifyId'];
        }

        return $model;
    }
}
