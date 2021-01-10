<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryMCJobListResponseBody\jobList\job\result\abuseResult;

use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMCJobListResponseBody\jobList\job\result\abuseResult\abuseTexts\abuseText;
use AlibabaCloud\Tea\Model;

class abuseTexts extends Model
{
    /**
     * @var abuseText[]
     */
    public $abuseText;
    protected $_name = [
        'abuseText' => 'AbuseText',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->abuseText) {
            $res['AbuseText'] = [];
            if (null !== $this->abuseText && \is_array($this->abuseText)) {
                $n = 0;
                foreach ($this->abuseText as $item) {
                    $res['AbuseText'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return abuseTexts
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AbuseText'])) {
            if (!empty($map['AbuseText'])) {
                $model->abuseText = [];
                $n                = 0;
                foreach ($map['AbuseText'] as $item) {
                    $model->abuseText[$n++] = null !== $item ? abuseText::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
