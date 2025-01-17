<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeBackupPoliciesResponseBody\pageInfo;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeBackupPoliciesResponseBody\policies;

class DescribeBackupPoliciesResponseBody extends Model
{
    /**
     * @var pageInfo
     */
    public $pageInfo;
    /**
     * @var policies[]
     */
    public $policies;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'pageInfo'  => 'PageInfo',
        'policies'  => 'Policies',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->pageInfo) {
            $this->pageInfo->validate();
        }
        if (\is_array($this->policies)) {
            Model::validateArray($this->policies);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->pageInfo) {
            $res['PageInfo'] = null !== $this->pageInfo ? $this->pageInfo->toArray($noStream) : $this->pageInfo;
        }

        if (null !== $this->policies) {
            if (\is_array($this->policies)) {
                $res['Policies'] = [];
                $n1              = 0;
                foreach ($this->policies as $item1) {
                    $res['Policies'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['PageInfo'])) {
            $model->pageInfo = pageInfo::fromMap($map['PageInfo']);
        }

        if (isset($map['Policies'])) {
            if (!empty($map['Policies'])) {
                $model->policies = [];
                $n1              = 0;
                foreach ($map['Policies'] as $item1) {
                    $model->policies[$n1++] = policies::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
