<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListTableLevelResponse;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListTableLevelResponse\tableLevelInfo\levelList;
use AlibabaCloud\Tea\Model;

class tableLevelInfo extends Model
{
    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var levelList[]
     */
    public $levelList;
    protected $_name = [
        'totalCount' => 'TotalCount',
        'levelList'  => 'LevelList',
    ];

    public function validate()
    {
        Model::validateRequired('totalCount', $this->totalCount, true);
        Model::validateRequired('levelList', $this->levelList, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->levelList) {
            $res['LevelList'] = [];
            if (null !== $this->levelList && \is_array($this->levelList)) {
                $n = 0;
                foreach ($this->levelList as $item) {
                    $res['LevelList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tableLevelInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['LevelList'])) {
            if (!empty($map['LevelList'])) {
                $model->levelList = [];
                $n                = 0;
                foreach ($map['LevelList'] as $item) {
                    $model->levelList[$n++] = null !== $item ? levelList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
