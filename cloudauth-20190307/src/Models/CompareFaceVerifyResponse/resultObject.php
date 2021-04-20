<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models\CompareFaceVerifyResponse;

use AlibabaCloud\Tea\Model;

class resultObject extends Model
{
    /**
     * @var string
     */
    public $passed;

    /**
     * @var float
     */
    public $verifyScore;

    /**
     * @var string
     */
    public $certifyId;
    protected $_name = [
        'passed'      => 'Passed',
        'verifyScore' => 'VerifyScore',
        'certifyId'   => 'CertifyId',
    ];

    public function validate()
    {
        Model::validateRequired('passed', $this->passed, true);
        Model::validateRequired('verifyScore', $this->verifyScore, true);
        Model::validateRequired('certifyId', $this->certifyId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->passed) {
            $res['Passed'] = $this->passed;
        }
        if (null !== $this->verifyScore) {
            $res['VerifyScore'] = $this->verifyScore;
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
        if (isset($map['VerifyScore'])) {
            $model->verifyScore = $map['VerifyScore'];
        }
        if (isset($map['CertifyId'])) {
            $model->certifyId = $map['CertifyId'];
        }

        return $model;
    }
}
