<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListQualityWatchTasksResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListQualityWatchTasksResponseBody\pageResult\qualityWatchTaskList;

class pageResult extends Model
{
    /**
     * @var qualityWatchTaskList[]
     */
    public $qualityWatchTaskList;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'qualityWatchTaskList' => 'QualityWatchTaskList',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->qualityWatchTaskList)) {
            Model::validateArray($this->qualityWatchTaskList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->qualityWatchTaskList) {
            if (\is_array($this->qualityWatchTaskList)) {
                $res['QualityWatchTaskList'] = [];
                $n1 = 0;
                foreach ($this->qualityWatchTaskList as $item1) {
                    $res['QualityWatchTaskList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['QualityWatchTaskList'])) {
            if (!empty($map['QualityWatchTaskList'])) {
                $model->qualityWatchTaskList = [];
                $n1 = 0;
                foreach ($map['QualityWatchTaskList'] as $item1) {
                    $model->qualityWatchTaskList[$n1] = qualityWatchTaskList::fromMap($item1);
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
