<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models\ListUserBasicInfosResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ims\V20190815\Models\ListUserBasicInfosResponseBody\userBasicInfos\userBasicInfo;

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
        if (\is_array($this->userBasicInfo)) {
            Model::validateArray($this->userBasicInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->userBasicInfo) {
            if (\is_array($this->userBasicInfo)) {
                $res['UserBasicInfo'] = [];
                $n1                   = 0;
                foreach ($this->userBasicInfo as $item1) {
                    $res['UserBasicInfo'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['UserBasicInfo'])) {
            if (!empty($map['UserBasicInfo'])) {
                $model->userBasicInfo = [];
                $n1                   = 0;
                foreach ($map['UserBasicInfo'] as $item1) {
                    $model->userBasicInfo[$n1++] = userBasicInfo::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
