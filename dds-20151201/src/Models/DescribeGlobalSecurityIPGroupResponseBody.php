<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models;

use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeGlobalSecurityIPGroupResponseBody\globalSecurityIPGroup;
use AlibabaCloud\Tea\Model;

class DescribeGlobalSecurityIPGroupResponseBody extends Model
{
    /**
     * @var globalSecurityIPGroup[]
     */
    public $globalSecurityIPGroup;

    /**
     * @example 72651AF9-7897-41A7-8B67-6C15C7F26A0A
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
     * @return DescribeGlobalSecurityIPGroupResponseBody
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
