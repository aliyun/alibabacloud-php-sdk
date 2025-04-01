<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeGlobalSecurityIPGroupRelationResponseBody\globalSecurityIPGroupRel;

class DescribeGlobalSecurityIPGroupRelationResponseBody extends Model
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
        'DBClusterId' => 'DBClusterId',
        'globalSecurityIPGroupRel' => 'GlobalSecurityIPGroupRel',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->globalSecurityIPGroupRel)) {
            Model::validateArray($this->globalSecurityIPGroupRel);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }

        if (null !== $this->globalSecurityIPGroupRel) {
            if (\is_array($this->globalSecurityIPGroupRel)) {
                $res['GlobalSecurityIPGroupRel'] = [];
                $n1 = 0;
                foreach ($this->globalSecurityIPGroupRel as $item1) {
                    $res['GlobalSecurityIPGroupRel'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }

        if (isset($map['GlobalSecurityIPGroupRel'])) {
            if (!empty($map['GlobalSecurityIPGroupRel'])) {
                $model->globalSecurityIPGroupRel = [];
                $n1 = 0;
                foreach ($map['GlobalSecurityIPGroupRel'] as $item1) {
                    $model->globalSecurityIPGroupRel[$n1++] = globalSecurityIPGroupRel::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
