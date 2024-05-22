<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudesl\V20190801\Models\DescribeUserLogResponseBody;

use AlibabaCloud\SDK\Cloudesl\V20190801\Models\DescribeUserLogResponseBody\userLogs\userLogInfo;
use AlibabaCloud\Tea\Model;

class userLogs extends Model
{
    /**
     * @var userLogInfo[]
     */
    public $userLogInfo;
    protected $_name = [
        'userLogInfo' => 'UserLogInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->userLogInfo) {
            $res['UserLogInfo'] = [];
            if (null !== $this->userLogInfo && \is_array($this->userLogInfo)) {
                $n = 0;
                foreach ($this->userLogInfo as $item) {
                    $res['UserLogInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return userLogs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UserLogInfo'])) {
            if (!empty($map['UserLogInfo'])) {
                $model->userLogInfo = [];
                $n                  = 0;
                foreach ($map['UserLogInfo'] as $item) {
                    $model->userLogInfo[$n++] = null !== $item ? userLogInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
