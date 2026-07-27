<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListKgEntityResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListKgEntityResponseBody\pageResult\entityList;

class pageResult extends Model
{
    /**
     * @var entityList[]
     */
    public $entityList;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'entityList' => 'EntityList',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->entityList)) {
            Model::validateArray($this->entityList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->entityList) {
            if (\is_array($this->entityList)) {
                $res['EntityList'] = [];
                $n1 = 0;
                foreach ($this->entityList as $item1) {
                    $res['EntityList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['EntityList'])) {
            if (!empty($map['EntityList'])) {
                $model->entityList = [];
                $n1 = 0;
                foreach ($map['EntityList'] as $item1) {
                    $model->entityList[$n1] = entityList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
