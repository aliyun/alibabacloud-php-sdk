<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListMetaDBResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListMetaDBResponseBody\databaseInfo\dbList;

class databaseInfo extends Model
{
    /**
     * @var dbList[]
     */
    public $dbList;
    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'dbList'     => 'DbList',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->dbList)) {
            Model::validateArray($this->dbList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dbList) {
            if (\is_array($this->dbList)) {
                $res['DbList'] = [];
                $n1            = 0;
                foreach ($this->dbList as $item1) {
                    $res['DbList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['DbList'])) {
            if (!empty($map['DbList'])) {
                $model->dbList = [];
                $n1            = 0;
                foreach ($map['DbList'] as $item1) {
                    $model->dbList[$n1++] = dbList::fromMap($item1);
                }
            }
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
