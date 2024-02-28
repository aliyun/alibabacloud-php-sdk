<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models;

use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeGlobalSecurityIPGroupRelationResponseBody\globalSecurityIPGroupRel;
use AlibabaCloud\Tea\Model;

class DescribeGlobalSecurityIPGroupRelationResponseBody extends Model
{
    /**
     * @description The instance ID.
     *
     * @example r-t4n885e834f6****
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @description The information about the associated global IP whitelist template.
     *
     * @var globalSecurityIPGroupRel[]
     */
    public $globalSecurityIPGroupRel;

    /**
     * @description The request ID.
     *
     * @example 9B7BFB11-C077-4FE3-B051-F69CEB******
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'DBClusterId'              => 'DBClusterId',
        'globalSecurityIPGroupRel' => 'GlobalSecurityIPGroupRel',
        'requestId'                => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }
        if (null !== $this->globalSecurityIPGroupRel) {
            $res['GlobalSecurityIPGroupRel'] = [];
            if (null !== $this->globalSecurityIPGroupRel && \is_array($this->globalSecurityIPGroupRel)) {
                $n = 0;
                foreach ($this->globalSecurityIPGroupRel as $item) {
                    $res['GlobalSecurityIPGroupRel'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribeGlobalSecurityIPGroupRelationResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
        if (isset($map['GlobalSecurityIPGroupRel'])) {
            if (!empty($map['GlobalSecurityIPGroupRel'])) {
                $model->globalSecurityIPGroupRel = [];
                $n                               = 0;
                foreach ($map['GlobalSecurityIPGroupRel'] as $item) {
                    $model->globalSecurityIPGroupRel[$n++] = null !== $item ? globalSecurityIPGroupRel::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
