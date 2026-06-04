<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\FetchParseDocumentLayoutTaskResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\FetchParseDocumentLayoutTaskResponseBody\data\layoutResult;

class data extends Model
{
    /**
     * @var layoutResult
     */
    public $layoutResult;

    /**
     * @var string
     */
    public $taskStats;
    protected $_name = [
        'layoutResult' => 'LayoutResult',
        'taskStats' => 'TaskStats',
    ];

    public function validate()
    {
        if (null !== $this->layoutResult) {
            $this->layoutResult->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->layoutResult) {
            $res['LayoutResult'] = null !== $this->layoutResult ? $this->layoutResult->toArray($noStream) : $this->layoutResult;
        }

        if (null !== $this->taskStats) {
            $res['TaskStats'] = $this->taskStats;
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
        if (isset($map['LayoutResult'])) {
            $model->layoutResult = layoutResult::fromMap($map['LayoutResult']);
        }

        if (isset($map['TaskStats'])) {
            $model->taskStats = $map['TaskStats'];
        }

        return $model;
    }
}
