<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryAsrJobListResponseBody\jobList\job;

use AlibabaCloud\SDK\Mts\V20140618\Models\QueryAsrJobListResponseBody\jobList\job\asrResult\asrTextList;
use AlibabaCloud\Tea\Model;

class asrResult extends Model
{
    /**
     * @var asrTextList
     */
    public $asrTextList;

    /**
     * @var string
     */
    public $duration;
    protected $_name = [
        'asrTextList' => 'AsrTextList',
        'duration'    => 'Duration',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->asrTextList) {
            $res['AsrTextList'] = null !== $this->asrTextList ? $this->asrTextList->toMap() : null;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return asrResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AsrTextList'])) {
            $model->asrTextList = asrTextList::fromMap($map['AsrTextList']);
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }

        return $model;
    }
}
