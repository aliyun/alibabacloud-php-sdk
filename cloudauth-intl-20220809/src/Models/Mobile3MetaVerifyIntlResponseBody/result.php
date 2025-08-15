<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\Mobile3MetaVerifyIntlResponseBody;

use AlibabaCloud\Dara\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $bizCode;

    /**
     * @var string
     */
    public $ispName;

    /**
     * @var string
     */
    public $subCode;
    protected $_name = [
        'bizCode' => 'BizCode',
        'ispName' => 'IspName',
        'subCode' => 'SubCode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizCode) {
            $res['BizCode'] = $this->bizCode;
        }

        if (null !== $this->ispName) {
            $res['IspName'] = $this->ispName;
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
        if (isset($map['BizCode'])) {
            $model->bizCode = $map['BizCode'];
        }

        if (isset($map['IspName'])) {
            $model->ispName = $map['IspName'];
        }

        if (isset($map['SubCode'])) {
            $model->subCode = $map['SubCode'];
        }

        return $model;
    }
}
