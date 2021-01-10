<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryMCJobListResponseBody\jobList\job\result\spamResult;

use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMCJobListResponseBody\jobList\job\result\spamResult\spamTexts\spamText;
use AlibabaCloud\Tea\Model;

class spamTexts extends Model
{
    /**
     * @var spamText[]
     */
    public $spamText;
    protected $_name = [
        'spamText' => 'SpamText',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->spamText) {
            $res['SpamText'] = [];
            if (null !== $this->spamText && \is_array($this->spamText)) {
                $n = 0;
                foreach ($this->spamText as $item) {
                    $res['SpamText'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return spamTexts
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SpamText'])) {
            if (!empty($map['SpamText'])) {
                $model->spamText = [];
                $n               = 0;
                foreach ($map['SpamText'] as $item) {
                    $model->spamText[$n++] = null !== $item ? spamText::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
