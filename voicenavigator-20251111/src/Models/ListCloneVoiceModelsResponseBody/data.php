<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VoiceNavigator\V20251111\Models\ListCloneVoiceModelsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\VoiceNavigator\V20251111\Models\ListCloneVoiceModelsResponseBody\data\cloneVoiceModels;

class data extends Model
{
    /**
     * @var cloneVoiceModels[]
     */
    public $cloneVoiceModels;

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
        'cloneVoiceModels' => 'CloneVoiceModels',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->cloneVoiceModels)) {
            Model::validateArray($this->cloneVoiceModels);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cloneVoiceModels) {
            if (\is_array($this->cloneVoiceModels)) {
                $res['CloneVoiceModels'] = [];
                $n1 = 0;
                foreach ($this->cloneVoiceModels as $item1) {
                    $res['CloneVoiceModels'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['CloneVoiceModels'])) {
            if (!empty($map['CloneVoiceModels'])) {
                $model->cloneVoiceModels = [];
                $n1 = 0;
                foreach ($map['CloneVoiceModels'] as $item1) {
                    $model->cloneVoiceModels[$n1] = cloneVoiceModels::fromMap($item1);
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
