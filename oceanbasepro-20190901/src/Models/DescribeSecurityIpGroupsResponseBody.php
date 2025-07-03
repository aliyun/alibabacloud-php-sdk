<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeSecurityIpGroupsResponseBody\securityIpGroups;

class DescribeSecurityIpGroupsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var securityIpGroups[]
     */
    public $securityIpGroups;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'requestId' => 'RequestId',
        'securityIpGroups' => 'SecurityIpGroups',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->securityIpGroups)) {
            Model::validateArray($this->securityIpGroups);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->securityIpGroups) {
            if (\is_array($this->securityIpGroups)) {
                $res['SecurityIpGroups'] = [];
                $n1 = 0;
                foreach ($this->securityIpGroups as $item1) {
                    $res['SecurityIpGroups'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SecurityIpGroups'])) {
            if (!empty($map['SecurityIpGroups'])) {
                $model->securityIpGroups = [];
                $n1 = 0;
                foreach ($map['SecurityIpGroups'] as $item1) {
                    $model->securityIpGroups[$n1] = securityIpGroups::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
