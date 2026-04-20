<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VoiceNavigator\V20251111\Models\ListInstructionsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\VoiceNavigator\V20251111\Models\ListInstructionsResponseBody\data\instructions;

class data extends Model
{
    /**
     * @var instructions[]
     */
    public $instructions;

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
        'instructions' => 'Instructions',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->instructions)) {
            Model::validateArray($this->instructions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instructions) {
            if (\is_array($this->instructions)) {
                $res['Instructions'] = [];
                $n1 = 0;
                foreach ($this->instructions as $item1) {
                    $res['Instructions'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Instructions'])) {
            if (!empty($map['Instructions'])) {
                $model->instructions = [];
                $n1 = 0;
                foreach ($map['Instructions'] as $item1) {
                    $model->instructions[$n1] = instructions::fromMap($item1);
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
