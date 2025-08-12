<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveUpVideoAudioInfoResponseBody\upItems\publishItem;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveUpVideoAudioInfoResponseBody\upItems\publishItem\avcHeaders\avcHeaders;

class avcHeaders extends Model
{
    /**
     * @var avcHeaders[]
     */
    public $avcHeaders;
    protected $_name = [
        'avcHeaders' => 'AvcHeaders',
    ];

    public function validate()
    {
        if (\is_array($this->avcHeaders)) {
            Model::validateArray($this->avcHeaders);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->avcHeaders) {
            if (\is_array($this->avcHeaders)) {
                $res['AvcHeaders'] = [];
                $n1 = 0;
                foreach ($this->avcHeaders as $item1) {
                    $res['AvcHeaders'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AvcHeaders'])) {
            if (!empty($map['AvcHeaders'])) {
                $model->avcHeaders = [];
                $n1 = 0;
                foreach ($map['AvcHeaders'] as $item1) {
                    $model->avcHeaders[$n1] = self::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
