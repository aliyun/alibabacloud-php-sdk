<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchGenerationResponseBody\payload\output\agentContext\bizContext\generatedContent\excerptResult\searchResult;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchGenerationResponseBody\payload\output\agentContext\bizContext\generatedContent\excerptResult\searchResult\textGenerateMultimodalMediaList\multimodalMediaList;

class textGenerateMultimodalMediaList extends Model
{
    /**
     * @var string
     */
    public $docUuid;

    /**
     * @var int
     */
    public $end;

    /**
     * @var multimodalMediaList[]
     */
    public $multimodalMediaList;

    /**
     * @var int
     */
    public $start;
    protected $_name = [
        'docUuid' => 'DocUuid',
        'end' => 'End',
        'multimodalMediaList' => 'MultimodalMediaList',
        'start' => 'Start',
    ];

    public function validate()
    {
        if (\is_array($this->multimodalMediaList)) {
            Model::validateArray($this->multimodalMediaList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->docUuid) {
            $res['DocUuid'] = $this->docUuid;
        }

        if (null !== $this->end) {
            $res['End'] = $this->end;
        }

        if (null !== $this->multimodalMediaList) {
            if (\is_array($this->multimodalMediaList)) {
                $res['MultimodalMediaList'] = [];
                $n1 = 0;
                foreach ($this->multimodalMediaList as $item1) {
                    $res['MultimodalMediaList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->start) {
            $res['Start'] = $this->start;
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
        if (isset($map['DocUuid'])) {
            $model->docUuid = $map['DocUuid'];
        }

        if (isset($map['End'])) {
            $model->end = $map['End'];
        }

        if (isset($map['MultimodalMediaList'])) {
            if (!empty($map['MultimodalMediaList'])) {
                $model->multimodalMediaList = [];
                $n1 = 0;
                foreach ($map['MultimodalMediaList'] as $item1) {
                    $model->multimodalMediaList[$n1] = multimodalMediaList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Start'])) {
            $model->start = $map['Start'];
        }

        return $model;
    }
}
