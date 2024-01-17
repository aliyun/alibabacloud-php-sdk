<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160201\Models\DescribeUserWhiteListsResponseBody;

use AlibabaCloud\SDK\CloudAPI\V20160201\Models\DescribeUserWhiteListsResponseBody\userWhiteListInfos\userWhiteListInfo;
use AlibabaCloud\Tea\Model;

class userWhiteListInfos extends Model
{
    /**
     * @var userWhiteListInfo[]
     */
    public $userWhiteListInfo;
    protected $_name = [
        'userWhiteListInfo' => 'UserWhiteListInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->userWhiteListInfo) {
            $res['UserWhiteListInfo'] = [];
            if (null !== $this->userWhiteListInfo && \is_array($this->userWhiteListInfo)) {
                $n = 0;
                foreach ($this->userWhiteListInfo as $item) {
                    $res['UserWhiteListInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return userWhiteListInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UserWhiteListInfo'])) {
            if (!empty($map['UserWhiteListInfo'])) {
                $model->userWhiteListInfo = [];
                $n                        = 0;
                foreach ($map['UserWhiteListInfo'] as $item) {
                    $model->userWhiteListInfo[$n++] = null !== $item ? userWhiteListInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
