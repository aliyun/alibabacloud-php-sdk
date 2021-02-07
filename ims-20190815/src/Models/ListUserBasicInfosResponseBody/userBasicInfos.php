<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models\ListUserBasicInfosResponseBody;

use AlibabaCloud\SDK\Ims\V20190815\Models\ListUserBasicInfosResponseBody\userBasicInfos\userBasicInfo;
use AlibabaCloud\Tea\Model;

class userBasicInfos extends Model
{
    /**
     * @var userBasicInfo[]
     */
    public $userBasicInfo;
    protected $_name = [
        'userBasicInfo' => 'UserBasicInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->userBasicInfo) {
            $res['UserBasicInfo'] = [];
            if (null !== $this->userBasicInfo && \is_array($this->userBasicInfo)) {
                $n = 0;
                foreach ($this->userBasicInfo as $item) {
                    $res['UserBasicInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return userBasicInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UserBasicInfo'])) {
            if (!empty($map['UserBasicInfo'])) {
                $model->userBasicInfo = [];
                $n                    = 0;
                foreach ($map['UserBasicInfo'] as $item) {
                    $model->userBasicInfo[$n++] = null !== $item ? userBasicInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
