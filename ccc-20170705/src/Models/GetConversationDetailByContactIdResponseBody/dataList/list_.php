<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\GetConversationDetailByContactIdResponseBody\dataList;

use AlibabaCloud\SDK\CCC\V20170705\Models\GetConversationDetailByContactIdResponseBody\dataList\list_\qualityCheckPhrase;
use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @var qualityCheckPhrase[]
     */
    public $qualityCheckPhrase;
    protected $_name = [
        'qualityCheckPhrase' => 'QualityCheckPhrase',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->qualityCheckPhrase) {
            $res['QualityCheckPhrase'] = [];
            if (null !== $this->qualityCheckPhrase && \is_array($this->qualityCheckPhrase)) {
                $n = 0;
                foreach ($this->qualityCheckPhrase as $item) {
                    $res['QualityCheckPhrase'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['QualityCheckPhrase'])) {
            if (!empty($map['QualityCheckPhrase'])) {
                $model->qualityCheckPhrase = [];
                $n                         = 0;
                foreach ($map['QualityCheckPhrase'] as $item) {
                    $model->qualityCheckPhrase[$n++] = null !== $item ? qualityCheckPhrase::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
