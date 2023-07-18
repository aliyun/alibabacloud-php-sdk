<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPServerless\V20190615\Models\DescribeCdnDomainResponseBody;

use AlibabaCloud\Tea\Model;

class corsConfig extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $accessOriginControl;

    /**
     * @example https://www.baidu.com
     *
     * @var string
     */
    public $allowOrigin;

    /**
     * @example 274436853071****
     *
     * @var string
     */
    public $configId;
    protected $_name = [
        'accessOriginControl' => 'AccessOriginControl',
        'allowOrigin'         => 'AllowOrigin',
        'configId'            => 'ConfigId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessOriginControl) {
            $res['AccessOriginControl'] = $this->accessOriginControl;
        }
        if (null !== $this->allowOrigin) {
            $res['AllowOrigin'] = $this->allowOrigin;
        }
        if (null !== $this->configId) {
            $res['ConfigId'] = $this->configId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return corsConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessOriginControl'])) {
            $model->accessOriginControl = $map['AccessOriginControl'];
        }
        if (isset($map['AllowOrigin'])) {
            $model->allowOrigin = $map['AllowOrigin'];
        }
        if (isset($map['ConfigId'])) {
            $model->configId = $map['ConfigId'];
        }

        return $model;
    }
}
