<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Buss\V20220822\Models\FindUserAvailbleResourcesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Buss\V20220822\Models\FindUserAvailbleResourcesResponseBody\data\pegCoordinates;
use AlibabaCloud\SDK\Buss\V20220822\Models\FindUserAvailbleResourcesResponseBody\data\userInfo;

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
        'userInfo' => 'UserInfo',
    ];

    public function validate()
    {
        if (\is_array($this->pegCoordinates)) {
            Model::validateArray($this->pegCoordinates);
        }
        if (null !== $this->userInfo) {
            $this->userInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->pegCoordinates) {
            if (\is_array($this->pegCoordinates)) {
                $res['PegCoordinates'] = [];
                $n1 = 0;
                foreach ($this->pegCoordinates as $item1) {
                    $res['PegCoordinates'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->userInfo) {
            $res['UserInfo'] = null !== $this->userInfo ? $this->userInfo->toArray($noStream) : $this->userInfo;
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
        if (isset($map['PegCoordinates'])) {
            if (!empty($map['PegCoordinates'])) {
                $model->pegCoordinates = [];
                $n1 = 0;
                foreach ($map['PegCoordinates'] as $item1) {
                    $model->pegCoordinates[$n1++] = pegCoordinates::fromMap($item1);
                }
            }
        }

        if (isset($map['UserInfo'])) {
            $model->userInfo = userInfo::fromMap($map['UserInfo']);
        }

        return $model;
    }
}
