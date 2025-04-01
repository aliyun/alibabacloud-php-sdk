<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeGlobalSecurityIPGroupResponseBody\globalSecurityIPGroup;

class DescribeGlobalSecurityIPGroupResponseBody extends Model
{
    /**
     * @var globalSecurityIPGroup[]
     */
    public $globalSecurityIPGroup;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'globalSecurityIPGroup' => 'GlobalSecurityIPGroup',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->globalSecurityIPGroup)) {
            Model::validateArray($this->globalSecurityIPGroup);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->globalSecurityIPGroup) {
            if (\is_array($this->globalSecurityIPGroup)) {
                $res['GlobalSecurityIPGroup'] = [];
                $n1 = 0;
                foreach ($this->globalSecurityIPGroup as $item1) {
                    $res['GlobalSecurityIPGroup'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['GlobalSecurityIPGroup'])) {
            if (!empty($map['GlobalSecurityIPGroup'])) {
                $model->globalSecurityIPGroup = [];
                $n1 = 0;
                foreach ($map['GlobalSecurityIPGroup'] as $item1) {
                    $model->globalSecurityIPGroup[$n1++] = globalSecurityIPGroup::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
