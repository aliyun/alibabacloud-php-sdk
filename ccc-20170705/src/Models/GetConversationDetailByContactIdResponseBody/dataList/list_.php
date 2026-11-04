<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\GetConversationDetailByContactIdResponseBody\dataList;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CCC\V20170705\Models\GetConversationDetailByContactIdResponseBody\dataList\list_\qualityCheckPhrase;

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
        if (\is_array($this->qualityCheckPhrase)) {
            Model::validateArray($this->qualityCheckPhrase);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->qualityCheckPhrase) {
            if (\is_array($this->qualityCheckPhrase)) {
                $res['QualityCheckPhrase'] = [];
                $n1 = 0;
                foreach ($this->qualityCheckPhrase as $item1) {
                    $res['QualityCheckPhrase'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['QualityCheckPhrase'])) {
            if (!empty($map['QualityCheckPhrase'])) {
                $model->qualityCheckPhrase = [];
                $n1 = 0;
                foreach ($map['QualityCheckPhrase'] as $item1) {
                    $model->qualityCheckPhrase[$n1] = qualityCheckPhrase::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
