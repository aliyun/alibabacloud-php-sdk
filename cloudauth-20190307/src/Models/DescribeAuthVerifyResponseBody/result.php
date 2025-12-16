<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeAuthVerifyResponseBody;

use AlibabaCloud\Dara\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $materialInfo;

    /**
     * @var string
     */
    public $spoofBackInfo;

    /**
     * @var string
     */
    public $spoofInfo;

    /**
     * @var string
     */
    public $subCode;
    protected $_name = [
        'materialInfo' => 'MaterialInfo',
        'spoofBackInfo' => 'SpoofBackInfo',
        'spoofInfo' => 'SpoofInfo',
        'subCode' => 'SubCode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->materialInfo) {
            $res['MaterialInfo'] = $this->materialInfo;
        }

        if (null !== $this->spoofBackInfo) {
            $res['SpoofBackInfo'] = $this->spoofBackInfo;
        }

        if (null !== $this->spoofInfo) {
            $res['SpoofInfo'] = $this->spoofInfo;
        }

        if (null !== $this->subCode) {
            $res['SubCode'] = $this->subCode;
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
        if (isset($map['MaterialInfo'])) {
            $model->materialInfo = $map['MaterialInfo'];
        }

        if (isset($map['SpoofBackInfo'])) {
            $model->spoofBackInfo = $map['SpoofBackInfo'];
        }

        if (isset($map['SpoofInfo'])) {
            $model->spoofInfo = $map['SpoofInfo'];
        }

        if (isset($map['SubCode'])) {
            $model->subCode = $map['SubCode'];
        }

        return $model;
    }
}
