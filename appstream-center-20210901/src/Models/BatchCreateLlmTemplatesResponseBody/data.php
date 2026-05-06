<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\BatchCreateLlmTemplatesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\BatchCreateLlmTemplatesResponseBody\data\skippedItems;

class data extends Model
{
    /**
     * @var string[]
     */
    public $llmTemplateIds;

    /**
     * @var skippedItems[]
     */
    public $skippedItems;

    /**
     * @var int
     */
    public $successCount;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'llmTemplateIds' => 'LlmTemplateIds',
        'skippedItems' => 'SkippedItems',
        'successCount' => 'SuccessCount',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->llmTemplateIds)) {
            Model::validateArray($this->llmTemplateIds);
        }
        if (\is_array($this->skippedItems)) {
            Model::validateArray($this->skippedItems);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->llmTemplateIds) {
            if (\is_array($this->llmTemplateIds)) {
                $res['LlmTemplateIds'] = [];
                $n1 = 0;
                foreach ($this->llmTemplateIds as $item1) {
                    $res['LlmTemplateIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->skippedItems) {
            if (\is_array($this->skippedItems)) {
                $res['SkippedItems'] = [];
                $n1 = 0;
                foreach ($this->skippedItems as $item1) {
                    $res['SkippedItems'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->successCount) {
            $res['SuccessCount'] = $this->successCount;
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
        if (isset($map['LlmTemplateIds'])) {
            if (!empty($map['LlmTemplateIds'])) {
                $model->llmTemplateIds = [];
                $n1 = 0;
                foreach ($map['LlmTemplateIds'] as $item1) {
                    $model->llmTemplateIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['SkippedItems'])) {
            if (!empty($map['SkippedItems'])) {
                $model->skippedItems = [];
                $n1 = 0;
                foreach ($map['SkippedItems'] as $item1) {
                    $model->skippedItems[$n1] = skippedItems::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['SuccessCount'])) {
            $model->successCount = $map['SuccessCount'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
