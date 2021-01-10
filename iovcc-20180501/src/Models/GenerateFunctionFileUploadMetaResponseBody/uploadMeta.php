<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models\GenerateFunctionFileUploadMetaResponseBody;

use AlibabaCloud\SDK\Iovcc\V20180501\Models\GenerateFunctionFileUploadMetaResponseBody\uploadMeta\postObjectPolicy;
use AlibabaCloud\Tea\Model;

class uploadMeta extends Model
{
    /**
     * @var postObjectPolicy
     */
    public $postObjectPolicy;

    /**
     * @var string
     */
    public $securityToken;

    /**
     * @var string
     */
    public $objectKey;
    protected $_name = [
        'postObjectPolicy' => 'PostObjectPolicy',
        'securityToken'    => 'SecurityToken',
        'objectKey'        => 'ObjectKey',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->postObjectPolicy) {
            $res['PostObjectPolicy'] = null !== $this->postObjectPolicy ? $this->postObjectPolicy->toMap() : null;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->objectKey) {
            $res['ObjectKey'] = $this->objectKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return uploadMeta
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PostObjectPolicy'])) {
            $model->postObjectPolicy = postObjectPolicy::fromMap($map['PostObjectPolicy']);
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['ObjectKey'])) {
            $model->objectKey = $map['ObjectKey'];
        }

        return $model;
    }
}
