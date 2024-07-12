<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Buss\V20220822\Models\FindUserAvailbleResourcesResponseBody;

use AlibabaCloud\SDK\Buss\V20220822\Models\FindUserAvailbleResourcesResponseBody\data\pegCoordinates;
use AlibabaCloud\SDK\Buss\V20220822\Models\FindUserAvailbleResourcesResponseBody\data\userInfo;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var pegCoordinates[]
     */
    public $pegCoordinates;

    /**
     * @var userInfo
     */
    public $userInfo;
    protected $_name = [
        'pegCoordinates' => 'PegCoordinates',
        'userInfo'       => 'UserInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pegCoordinates) {
            $res['PegCoordinates'] = [];
            if (null !== $this->pegCoordinates && \is_array($this->pegCoordinates)) {
                $n = 0;
                foreach ($this->pegCoordinates as $item) {
                    $res['PegCoordinates'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->userInfo) {
            $res['UserInfo'] = null !== $this->userInfo ? $this->userInfo->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PegCoordinates'])) {
            if (!empty($map['PegCoordinates'])) {
                $model->pegCoordinates = [];
                $n                     = 0;
                foreach ($map['PegCoordinates'] as $item) {
                    $model->pegCoordinates[$n++] = null !== $item ? pegCoordinates::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['UserInfo'])) {
            $model->userInfo = userInfo::fromMap($map['UserInfo']);
        }

        return $model;
    }
}
