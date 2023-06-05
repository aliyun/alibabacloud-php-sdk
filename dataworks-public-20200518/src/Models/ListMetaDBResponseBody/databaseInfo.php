<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListMetaDBResponseBody;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListMetaDBResponseBody\databaseInfo\dbList;
use AlibabaCloud\Tea\Model;

class databaseInfo extends Model
{
    /**
     * @description The timestamp at which the metadatabase was created. You can convert the timestamp to the related date based on the time zone that you use.
     *
     * @var dbList[]
     */
    public $dbList;

    /**
     * @description The type of the metadatabase.
     *
     * @example 10
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'dbList'     => 'DbList',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dbList) {
            $res['DbList'] = [];
            if (null !== $this->dbList && \is_array($this->dbList)) {
                $n = 0;
                foreach ($this->dbList as $item) {
                    $res['DbList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['DbList'])) {
            if (!empty($map['DbList'])) {
                $model->dbList = [];
                $n             = 0;
                foreach ($map['DbList'] as $item) {
                    $model->dbList[$n++] = null !== $item ? dbList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
