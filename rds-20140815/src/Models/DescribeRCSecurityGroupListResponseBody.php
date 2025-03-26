<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeRCSecurityGroupListResponseBody\RCSecurityGroups;

class DescribeRCSecurityGroupListResponseBody extends Model
{
    /**
     * @var RCSecurityGroups[]
     */
    public $RCSecurityGroups;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'RCSecurityGroups' => 'RCSecurityGroups',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->RCSecurityGroups)) {
            Model::validateArray($this->RCSecurityGroups);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->RCSecurityGroups) {
            if (\is_array($this->RCSecurityGroups)) {
                $res['RCSecurityGroups'] = [];
                $n1 = 0;
                foreach ($this->RCSecurityGroups as $item1) {
                    $res['RCSecurityGroups'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['RCSecurityGroups'])) {
            if (!empty($map['RCSecurityGroups'])) {
                $model->RCSecurityGroups = [];
                $n1 = 0;
                foreach ($map['RCSecurityGroups'] as $item1) {
                    $model->RCSecurityGroups[$n1++] = RCSecurityGroups::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
