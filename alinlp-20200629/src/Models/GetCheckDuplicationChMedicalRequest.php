<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alinlp\V20200629\Models;

use AlibabaCloud\Tea\Model;

class GetCheckDuplicationChMedicalRequest extends Model
{
    /**
     * @var string
     */
    public $originQ;

    /**
     * @var string
     */
    public $originT;

    /**
     * @var string
     */
    public $serviceCode;
    protected $_name = [
        'originQ'     => 'OriginQ',
        'originT'     => 'OriginT',
        'serviceCode' => 'ServiceCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->originQ) {
            $res['OriginQ'] = $this->originQ;
        }
        if (null !== $this->originT) {
            $res['OriginT'] = $this->originT;
        }
        if (null !== $this->serviceCode) {
            $res['ServiceCode'] = $this->serviceCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetCheckDuplicationChMedicalRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OriginQ'])) {
            $model->originQ = $map['OriginQ'];
        }
        if (isset($map['OriginT'])) {
            $model->originT = $map['OriginT'];
        }
        if (isset($map['ServiceCode'])) {
            $model->serviceCode = $map['ServiceCode'];
        }

        return $model;
    }
}
