<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models\InvestigateFileRequest;

use AlibabaCloud\Tea\Model;

class policy extends Model
{
    /**
     * @var string
     */
    public $firstProductName;

    /**
     * @var string
     */
    public $mteeCode;

    /**
     * @var string
     */
    public $provider;
    protected $_name = [
        'firstProductName' => 'first_product_name',
        'mteeCode'         => 'mtee_code',
        'provider'         => 'provider',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->firstProductName) {
            $res['first_product_name'] = $this->firstProductName;
        }
        if (null !== $this->mteeCode) {
            $res['mtee_code'] = $this->mteeCode;
        }
        if (null !== $this->provider) {
            $res['provider'] = $this->provider;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return policy
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['first_product_name'])) {
            $model->firstProductName = $map['first_product_name'];
        }
        if (isset($map['mtee_code'])) {
            $model->mteeCode = $map['mtee_code'];
        }
        if (isset($map['provider'])) {
            $model->provider = $map['provider'];
        }

        return $model;
    }
}
