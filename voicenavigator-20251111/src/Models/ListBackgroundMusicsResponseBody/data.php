<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VoiceNavigator\V20251111\Models\ListBackgroundMusicsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\VoiceNavigator\V20251111\Models\ListBackgroundMusicsResponseBody\data\backgroundMusics;

class data extends Model
{
    /**
     * @var backgroundMusics[]
     */
    public $backgroundMusics;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'backgroundMusics' => 'BackgroundMusics',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->backgroundMusics)) {
            Model::validateArray($this->backgroundMusics);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->backgroundMusics) {
            if (\is_array($this->backgroundMusics)) {
                $res['BackgroundMusics'] = [];
                $n1 = 0;
                foreach ($this->backgroundMusics as $item1) {
                    $res['BackgroundMusics'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
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
        if (isset($map['BackgroundMusics'])) {
            if (!empty($map['BackgroundMusics'])) {
                $model->backgroundMusics = [];
                $n1 = 0;
                foreach ($map['BackgroundMusics'] as $item1) {
                    $model->backgroundMusics[$n1] = backgroundMusics::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
