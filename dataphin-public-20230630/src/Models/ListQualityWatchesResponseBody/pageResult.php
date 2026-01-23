<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListQualityWatchesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListQualityWatchesResponseBody\pageResult\qualityWatchList;

class pageResult extends Model
{
    /**
     * @var qualityWatchList[]
     */
    public $qualityWatchList;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'qualityWatchList' => 'QualityWatchList',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->qualityWatchList)) {
            Model::validateArray($this->qualityWatchList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->qualityWatchList) {
            if (\is_array($this->qualityWatchList)) {
                $res['QualityWatchList'] = [];
                $n1 = 0;
                foreach ($this->qualityWatchList as $item1) {
                    $res['QualityWatchList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['QualityWatchList'])) {
            if (!empty($map['QualityWatchList'])) {
                $model->qualityWatchList = [];
                $n1 = 0;
                foreach ($map['QualityWatchList'] as $item1) {
                    $model->qualityWatchList[$n1] = qualityWatchList::fromMap($item1);
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
