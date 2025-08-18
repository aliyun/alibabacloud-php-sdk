<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListDataSourceWithConfigResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListDataSourceWithConfigResponseBody\pageResult\dataSourceList;

class pageResult extends Model
{
    /**
     * @var dataSourceList[]
     */
    public $dataSourceList;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'dataSourceList' => 'DataSourceList',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->dataSourceList)) {
            Model::validateArray($this->dataSourceList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataSourceList) {
            if (\is_array($this->dataSourceList)) {
                $res['DataSourceList'] = [];
                $n1 = 0;
                foreach ($this->dataSourceList as $item1) {
                    $res['DataSourceList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['DataSourceList'])) {
            if (!empty($map['DataSourceList'])) {
                $model->dataSourceList = [];
                $n1 = 0;
                foreach ($map['DataSourceList'] as $item1) {
                    $model->dataSourceList[$n1] = dataSourceList::fromMap($item1);
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
