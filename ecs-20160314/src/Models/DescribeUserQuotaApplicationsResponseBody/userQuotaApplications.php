<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeUserQuotaApplicationsResponseBody;

use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeUserQuotaApplicationsResponseBody\userQuotaApplications\userQuotaApplication;
use AlibabaCloud\Tea\Model;

class userQuotaApplications extends Model
{
    /**
     * @var userQuotaApplication[]
     */
    public $userQuotaApplication;
    protected $_name = [
        'userQuotaApplication' => 'UserQuotaApplication',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->userQuotaApplication) {
            $res['UserQuotaApplication'] = [];
            if (null !== $this->userQuotaApplication && \is_array($this->userQuotaApplication)) {
                $n = 0;
                foreach ($this->userQuotaApplication as $item) {
                    $res['UserQuotaApplication'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return userQuotaApplications
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UserQuotaApplication'])) {
            if (!empty($map['UserQuotaApplication'])) {
                $model->userQuotaApplication = [];
                $n                           = 0;
                foreach ($map['UserQuotaApplication'] as $item) {
                    $model->userQuotaApplication[$n++] = null !== $item ? userQuotaApplication::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
