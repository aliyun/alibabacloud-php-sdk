<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models;

use AlibabaCloud\Tea\Model;

class CORSRule extends Model
{
    /**
     * @description description
     *
     * @var string
     */
    public $allowedHeader;

    /**
     * @description description
     *
     * @var string[]
     */
    public $allowedMethod;

    /**
     * @description description
     *
     * @var string[]
     */
    public $allowedOrigin;

    /**
     * @description description
     *
     * @var string[]
     */
    public $exposeHeader;

    /**
     * @description description
     *
     * @var int
     */
    public $maxAgeSeconds;
    protected $_name = [
        'allowedHeader' => 'AllowedHeader',
        'allowedMethod' => 'AllowedMethod',
        'allowedOrigin' => 'AllowedOrigin',
        'exposeHeader'  => 'ExposeHeader',
        'maxAgeSeconds' => 'MaxAgeSeconds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->allowedHeader) {
            $res['AllowedHeader'] = $this->allowedHeader;
        }
        if (null !== $this->allowedMethod) {
            $res['AllowedMethod'] = $this->allowedMethod;
        }
        if (null !== $this->allowedOrigin) {
            $res['AllowedOrigin'] = $this->allowedOrigin;
        }
        if (null !== $this->exposeHeader) {
            $res['ExposeHeader'] = $this->exposeHeader;
        }
        if (null !== $this->maxAgeSeconds) {
            $res['MaxAgeSeconds'] = $this->maxAgeSeconds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CORSRule
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AllowedHeader'])) {
            $model->allowedHeader = $map['AllowedHeader'];
        }
        if (isset($map['AllowedMethod'])) {
            if (!empty($map['AllowedMethod'])) {
                $model->allowedMethod = $map['AllowedMethod'];
            }
        }
        if (isset($map['AllowedOrigin'])) {
            if (!empty($map['AllowedOrigin'])) {
                $model->allowedOrigin = $map['AllowedOrigin'];
            }
        }
        if (isset($map['ExposeHeader'])) {
            if (!empty($map['ExposeHeader'])) {
                $model->exposeHeader = $map['ExposeHeader'];
            }
        }
        if (isset($map['MaxAgeSeconds'])) {
            $model->maxAgeSeconds = $map['MaxAgeSeconds'];
        }

        return $model;
    }
}
