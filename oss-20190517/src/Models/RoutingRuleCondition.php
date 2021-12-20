<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models;

use AlibabaCloud\Tea\Model;

class RoutingRuleCondition extends Model
{
    /**
     * @description A short description of struct
     *
     * @var int
     */
    public $httpErrorCodeReturnedEquals;

    /**
     * @description A short description of struct
     *
     * @var string
     */
    public $keyPrefixEquals;
    protected $_name = [
        'httpErrorCodeReturnedEquals' => 'HttpErrorCodeReturnedEquals',
        'keyPrefixEquals'             => 'KeyPrefixEquals',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->httpErrorCodeReturnedEquals) {
            $res['HttpErrorCodeReturnedEquals'] = $this->httpErrorCodeReturnedEquals;
        }
        if (null !== $this->keyPrefixEquals) {
            $res['KeyPrefixEquals'] = $this->keyPrefixEquals;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RoutingRuleCondition
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HttpErrorCodeReturnedEquals'])) {
            $model->httpErrorCodeReturnedEquals = $map['HttpErrorCodeReturnedEquals'];
        }
        if (isset($map['KeyPrefixEquals'])) {
            $model->keyPrefixEquals = $map['KeyPrefixEquals'];
        }

        return $model;
    }
}
