<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchGenerationResponseBody\payload\output\agentContext\bizContext\generatedContent\textGenerateResult;

use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchGenerationResponseBody\payload\output\agentContext\bizContext\generatedContent\textGenerateResult\textGenerateMultimodalMediaList\multimodalMediaList;
use AlibabaCloud\Tea\Model;

class textGenerateMultimodalMediaList extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $end;

    /**
     * @var multimodalMediaList[]
     */
    public $multimodalMediaList;

    /**
     * @example 1
     *
     * @var int
     */
    public $start;
    protected $_name = [
        'end' => 'End',
        'multimodalMediaList' => 'MultimodalMediaList',
        'start' => 'Start',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->end) {
            $res['End'] = $this->end;
        }
        if (null !== $this->multimodalMediaList) {
            $res['MultimodalMediaList'] = [];
            if (null !== $this->multimodalMediaList && \is_array($this->multimodalMediaList)) {
                $n = 0;
                foreach ($this->multimodalMediaList as $item) {
                    $res['MultimodalMediaList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->start) {
            $res['Start'] = $this->start;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return textGenerateMultimodalMediaList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['End'])) {
            $model->end = $map['End'];
        }
        if (isset($map['MultimodalMediaList'])) {
            if (!empty($map['MultimodalMediaList'])) {
                $model->multimodalMediaList = [];
                $n = 0;
                foreach ($map['MultimodalMediaList'] as $item) {
                    $model->multimodalMediaList[$n++] = null !== $item ? multimodalMediaList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Start'])) {
            $model->start = $map['Start'];
        }

        return $model;
    }
}
