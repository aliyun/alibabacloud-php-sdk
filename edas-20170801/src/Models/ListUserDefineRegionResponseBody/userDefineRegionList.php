<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\ListUserDefineRegionResponseBody;

use AlibabaCloud\SDK\Edas\V20170801\Models\ListUserDefineRegionResponseBody\userDefineRegionList\userDefineRegionEntity;
use AlibabaCloud\Tea\Model;

class userDefineRegionList extends Model
{
    /**
     * @var userDefineRegionEntity[]
     */
    public $userDefineRegionEntity;
    protected $_name = [
        'userDefineRegionEntity' => 'UserDefineRegionEntity',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->userDefineRegionEntity) {
            $res['UserDefineRegionEntity'] = [];
            if (null !== $this->userDefineRegionEntity && \is_array($this->userDefineRegionEntity)) {
                $n = 0;
                foreach ($this->userDefineRegionEntity as $item) {
                    $res['UserDefineRegionEntity'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return userDefineRegionList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UserDefineRegionEntity'])) {
            if (!empty($map['UserDefineRegionEntity'])) {
                $model->userDefineRegionEntity = [];
                $n                             = 0;
                foreach ($map['UserDefineRegionEntity'] as $item) {
                    $model->userDefineRegionEntity[$n++] = null !== $item ? userDefineRegionEntity::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
