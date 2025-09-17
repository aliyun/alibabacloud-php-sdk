<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysmsapi\V20170525\Models\VerifyLogisticsSmsMailNoResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $expressCompanyCode;

    /**
     * @var string
     */
    public $mobileSuffix;

    /**
     * @var bool
     */
    public $verifyResult;
    protected $_name = [
        'expressCompanyCode' => 'ExpressCompanyCode',
        'mobileSuffix' => 'MobileSuffix',
        'verifyResult' => 'VerifyResult',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->expressCompanyCode) {
            $res['ExpressCompanyCode'] = $this->expressCompanyCode;
        }

        if (null !== $this->mobileSuffix) {
            $res['MobileSuffix'] = $this->mobileSuffix;
        }

        if (null !== $this->verifyResult) {
            $res['VerifyResult'] = $this->verifyResult;
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
        if (isset($map['ExpressCompanyCode'])) {
            $model->expressCompanyCode = $map['ExpressCompanyCode'];
        }

        if (isset($map['MobileSuffix'])) {
            $model->mobileSuffix = $map['MobileSuffix'];
        }

        if (isset($map['VerifyResult'])) {
            $model->verifyResult = $map['VerifyResult'];
        }

        return $model;
    }
}
