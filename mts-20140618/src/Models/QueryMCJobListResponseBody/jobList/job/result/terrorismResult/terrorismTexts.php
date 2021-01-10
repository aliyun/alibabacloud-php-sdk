<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryMCJobListResponseBody\jobList\job\result\terrorismResult;

use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMCJobListResponseBody\jobList\job\result\terrorismResult\terrorismTexts\terrorismText;
use AlibabaCloud\Tea\Model;

class terrorismTexts extends Model
{
    /**
     * @var terrorismText[]
     */
    public $terrorismText;
    protected $_name = [
        'terrorismText' => 'TerrorismText',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->terrorismText) {
            $res['TerrorismText'] = [];
            if (null !== $this->terrorismText && \is_array($this->terrorismText)) {
                $n = 0;
                foreach ($this->terrorismText as $item) {
                    $res['TerrorismText'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return terrorismTexts
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TerrorismText'])) {
            if (!empty($map['TerrorismText'])) {
                $model->terrorismText = [];
                $n                    = 0;
                foreach ($map['TerrorismText'] as $item) {
                    $model->terrorismText[$n++] = null !== $item ? terrorismText::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
