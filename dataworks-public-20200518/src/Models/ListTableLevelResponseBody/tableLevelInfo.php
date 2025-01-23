<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListTableLevelResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListTableLevelResponseBody\tableLevelInfo\levelList;

class tableLevelInfo extends Model
{
    /**
     * @var levelList[]
     */
    public $levelList;
    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'levelList'  => 'LevelList',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->levelList)) {
            Model::validateArray($this->levelList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->levelList) {
            if (\is_array($this->levelList)) {
                $res['LevelList'] = [];
                $n1               = 0;
                foreach ($this->levelList as $item1) {
                    $res['LevelList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['LevelList'])) {
            if (!empty($map['LevelList'])) {
                $model->levelList = [];
                $n1               = 0;
                foreach ($map['LevelList'] as $item1) {
                    $model->levelList[$n1++] = levelList::fromMap($item1);
                }
            }
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
