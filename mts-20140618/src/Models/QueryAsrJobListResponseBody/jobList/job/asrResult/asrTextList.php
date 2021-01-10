<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryAsrJobListResponseBody\jobList\job\asrResult;

use AlibabaCloud\SDK\Mts\V20140618\Models\QueryAsrJobListResponseBody\jobList\job\asrResult\asrTextList\asrText;
use AlibabaCloud\Tea\Model;

class asrTextList extends Model
{
    /**
     * @var asrText[]
     */
    public $asrText;
    protected $_name = [
        'asrText' => 'AsrText',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->asrText) {
            $res['AsrText'] = [];
            if (null !== $this->asrText && \is_array($this->asrText)) {
                $n = 0;
                foreach ($this->asrText as $item) {
                    $res['AsrText'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return asrTextList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AsrText'])) {
            if (!empty($map['AsrText'])) {
                $model->asrText = [];
                $n              = 0;
                foreach ($map['AsrText'] as $item) {
                    $model->asrText[$n++] = null !== $item ? asrText::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
