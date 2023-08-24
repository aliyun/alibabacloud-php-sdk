<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models;

use AlibabaCloud\SDK\Rkvstore\V20150101\Models\CreateGlobalSecurityIPGroupResponseBody\globalSecurityIPGroup;
use AlibabaCloud\Tea\Model;

class CreateGlobalSecurityIPGroupResponseBody extends Model
{
    /**
     * @description 1
     *
     * @var globalSecurityIPGroup[]
     */
    public $globalSecurityIPGroup;

    /**
     * @description The request ID.
     *
     * @example 5D622714-AEDD-4609-9167-F5DDD3D1****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'globalSecurityIPGroup' => 'GlobalSecurityIPGroup',
        'requestId'             => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->globalSecurityIPGroup) {
            $res['GlobalSecurityIPGroup'] = [];
            if (null !== $this->globalSecurityIPGroup && \is_array($this->globalSecurityIPGroup)) {
                $n = 0;
                foreach ($this->globalSecurityIPGroup as $item) {
                    $res['GlobalSecurityIPGroup'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateGlobalSecurityIPGroupResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GlobalSecurityIPGroup'])) {
            if (!empty($map['GlobalSecurityIPGroup'])) {
                $model->globalSecurityIPGroup = [];
                $n                            = 0;
                foreach ($map['GlobalSecurityIPGroup'] as $item) {
                    $model->globalSecurityIPGroup[$n++] = null !== $item ? globalSecurityIPGroup::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
