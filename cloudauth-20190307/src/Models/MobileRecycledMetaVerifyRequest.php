<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models;

use AlibabaCloud\Dara\Model;

class MobileRecycledMetaVerifyRequest extends Model
{
    /**
     * @var string
     */
    public $mobile;

    /**
     * @var string
     */
    public $paramType;

    /**
     * @var string
     */
    public $registerDate;
    protected $_name = [
        'mobile' => 'Mobile',
        'paramType' => 'ParamType',
        'registerDate' => 'RegisterDate',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->mobile) {
            $res['Mobile'] = $this->mobile;
        }

        if (null !== $this->paramType) {
            $res['ParamType'] = $this->paramType;
        }

        if (null !== $this->registerDate) {
            $res['RegisterDate'] = $this->registerDate;
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
        if (isset($map['Mobile'])) {
            $model->mobile = $map['Mobile'];
        }

        if (isset($map['ParamType'])) {
            $model->paramType = $map['ParamType'];
        }

        if (isset($map['RegisterDate'])) {
            $model->registerDate = $map['RegisterDate'];
        }

        return $model;
    }
}
