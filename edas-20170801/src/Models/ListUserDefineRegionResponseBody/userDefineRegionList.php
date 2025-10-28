<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\ListUserDefineRegionResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Edas\V20170801\Models\ListUserDefineRegionResponseBody\userDefineRegionList\userDefineRegionEntity;

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
        if (\is_array($this->userDefineRegionEntity)) {
            Model::validateArray($this->userDefineRegionEntity);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->userDefineRegionEntity) {
            if (\is_array($this->userDefineRegionEntity)) {
                $res['UserDefineRegionEntity'] = [];
                $n1 = 0;
                foreach ($this->userDefineRegionEntity as $item1) {
                    $res['UserDefineRegionEntity'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['UserDefineRegionEntity'])) {
            if (!empty($map['UserDefineRegionEntity'])) {
                $model->userDefineRegionEntity = [];
                $n1 = 0;
                foreach ($map['UserDefineRegionEntity'] as $item1) {
                    $model->userDefineRegionEntity[$n1] = userDefineRegionEntity::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
