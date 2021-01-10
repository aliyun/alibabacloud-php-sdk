<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryMCJobListResponseBody\jobList\job\result\adResult;

use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMCJobListResponseBody\jobList\job\result\adResult\adTexts\adText;
use AlibabaCloud\Tea\Model;

class adTexts extends Model
{
    /**
     * @var adText[]
     */
    public $adText;
    protected $_name = [
        'adText' => 'AdText',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->adText) {
            $res['AdText'] = [];
            if (null !== $this->adText && \is_array($this->adText)) {
                $n = 0;
                foreach ($this->adText as $item) {
                    $res['AdText'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return adTexts
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AdText'])) {
            if (!empty($map['AdText'])) {
                $model->adText = [];
                $n             = 0;
                foreach ($map['AdText'] as $item) {
                    $model->adText[$n++] = null !== $item ? adText::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
