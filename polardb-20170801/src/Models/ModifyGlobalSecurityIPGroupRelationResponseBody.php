<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\SDK\Polardb\V20170801\Models\ModifyGlobalSecurityIPGroupRelationResponseBody\globalSecurityIPGroupRel;
use AlibabaCloud\Tea\Model;

class ModifyGlobalSecurityIPGroupRelationResponseBody extends Model
{
    /**
     * @var string
     */
    public $DBClusterId;

    /**
     * @var globalSecurityIPGroupRel[]
     */
    public $globalSecurityIPGroupRel;

    /**
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
     * @return ModifyGlobalSecurityIPGroupRelationResponseBody
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
