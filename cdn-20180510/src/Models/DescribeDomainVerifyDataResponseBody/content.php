<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainVerifyDataResponseBody;

use AlibabaCloud\Dara\Model;

class content extends Model
{
    /**
     * @var string
     */
    public $rootDomain;

    /**
     * @var string
     */
    public $verifyCode;

    /**
     * @var string
     */
    public $verifyKey;
    protected $_name = [
        'rootDomain' => 'RootDomain',
        'verifyCode' => 'verifyCode',
        'verifyKey' => 'verifyKey',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->rootDomain) {
            $res['RootDomain'] = $this->rootDomain;
        }

        if (null !== $this->verifyCode) {
            $res['verifyCode'] = $this->verifyCode;
        }

        if (null !== $this->verifyKey) {
            $res['verifyKey'] = $this->verifyKey;
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
        if (isset($map['RootDomain'])) {
            $model->rootDomain = $map['RootDomain'];
        }

        if (isset($map['verifyCode'])) {
            $model->verifyCode = $map['verifyCode'];
        }

        if (isset($map['verifyKey'])) {
            $model->verifyKey = $map['verifyKey'];
        }

        return $model;
    }
}
