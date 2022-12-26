<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeUniBackupPoliciesResponseBody\pageInfo;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeUniBackupPoliciesResponseBody\uniBackupPolicies;
use AlibabaCloud\Tea\Model;

class DescribeUniBackupPoliciesResponseBody extends Model
{
    /**
     * @var pageInfo
     */
    public $pageInfo;

    /**
     * @example ACF97412-FD09-4D1F-994F-34DF12BR****
     *
     * @var string
     */
    public $requestId;

    /**
     * @var uniBackupPolicies[]
     */
    public $uniBackupPolicies;
    protected $_name = [
        'pageInfo'          => 'PageInfo',
        'requestId'         => 'RequestId',
        'uniBackupPolicies' => 'UniBackupPolicies',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageInfo) {
            $res['PageInfo'] = null !== $this->pageInfo ? $this->pageInfo->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->uniBackupPolicies) {
            $res['UniBackupPolicies'] = [];
            if (null !== $this->uniBackupPolicies && \is_array($this->uniBackupPolicies)) {
                $n = 0;
                foreach ($this->uniBackupPolicies as $item) {
                    $res['UniBackupPolicies'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeUniBackupPoliciesResponseBody
     */
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
                $n                        = 0;
                foreach ($map['UniBackupPolicies'] as $item) {
                    $model->uniBackupPolicies[$n++] = null !== $item ? uniBackupPolicies::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
