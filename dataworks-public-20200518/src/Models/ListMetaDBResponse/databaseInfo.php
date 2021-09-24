<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListMetaDBResponse;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListMetaDBResponse\databaseInfo\dbList;
use AlibabaCloud\Tea\Model;

class databaseInfo extends Model
{
    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var dbList[]
     */
    public $dbList;
    protected $_name = [
        'totalCount' => 'TotalCount',
        'dbList'     => 'DbList',
    ];

    public function validate()
    {
        Model::validateRequired('totalCount', $this->totalCount, true);
        Model::validateRequired('dbList', $this->dbList, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->dbList) {
            $res['DbList'] = [];
            if (null !== $this->dbList && \is_array($this->dbList)) {
                $n = 0;
                foreach ($this->dbList as $item) {
                    $res['DbList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return databaseInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['DbList'])) {
            if (!empty($map['DbList'])) {
                $model->dbList = [];
                $n             = 0;
                foreach ($map['DbList'] as $item) {
                    $model->dbList[$n++] = null !== $item ? dbList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
