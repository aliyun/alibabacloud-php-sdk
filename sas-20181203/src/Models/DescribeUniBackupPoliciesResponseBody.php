<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeUniBackupPoliciesResponseBody\pageInfo;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeUniBackupPoliciesResponseBody\uniBackupPolicies;

class DescribeUniBackupPoliciesResponseBody extends Model
{
    /**
     * @var pageInfo
     */
    public $pageInfo;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var uniBackupPolicies[]
     */
    public $uniBackupPolicies;
    protected $_name = [
        'pageInfo' => 'PageInfo',
        'requestId' => 'RequestId',
        'uniBackupPolicies' => 'UniBackupPolicies',
    ];

    public function validate()
    {
        if (null !== $this->pageInfo) {
            $this->pageInfo->validate();
        }
        if (\is_array($this->uniBackupPolicies)) {
            Model::validateArray($this->uniBackupPolicies);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->pageInfo) {
            $res['PageInfo'] = null !== $this->pageInfo ? $this->pageInfo->toArray($noStream) : $this->pageInfo;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->uniBackupPolicies) {
            if (\is_array($this->uniBackupPolicies)) {
                $res['UniBackupPolicies'] = [];
                $n1 = 0;
                foreach ($this->uniBackupPolicies as $item1) {
                    $res['UniBackupPolicies'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['UniBackupPolicies'])) {
            if (!empty($map['UniBackupPolicies'])) {
                $model->uniBackupPolicies = [];
                $n1 = 0;
                foreach ($map['UniBackupPolicies'] as $item1) {
                    $model->uniBackupPolicies[$n1] = uniBackupPolicies::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
