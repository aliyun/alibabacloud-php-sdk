<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryMCJobListResponseBody\jobList\job\result\politicsResult;

use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMCJobListResponseBody\jobList\job\result\politicsResult\politicsTexts\politicsText;
use AlibabaCloud\Tea\Model;

class politicsTexts extends Model
{
    /**
     * @var politicsText[]
     */
    public $politicsText;
    protected $_name = [
        'politicsText' => 'PoliticsText',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->politicsText) {
            $res['PoliticsText'] = [];
            if (null !== $this->politicsText && \is_array($this->politicsText)) {
                $n = 0;
                foreach ($this->politicsText as $item) {
                    $res['PoliticsText'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return politicsTexts
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PoliticsText'])) {
            if (!empty($map['PoliticsText'])) {
                $model->politicsText = [];
                $n                   = 0;
                foreach ($map['PoliticsText'] as $item) {
                    $model->politicsText[$n++] = null !== $item ? politicsText::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
