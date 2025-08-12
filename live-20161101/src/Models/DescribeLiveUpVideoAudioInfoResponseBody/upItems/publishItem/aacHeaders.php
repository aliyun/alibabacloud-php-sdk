<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveUpVideoAudioInfoResponseBody\upItems\publishItem;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveUpVideoAudioInfoResponseBody\upItems\publishItem\aacHeaders\aacHeaders;

class aacHeaders extends Model
{
    /**
     * @var aacHeaders[]
     */
    public $aacHeaders;
    protected $_name = [
        'aacHeaders' => 'AacHeaders',
    ];

    public function validate()
    {
        if (\is_array($this->aacHeaders)) {
            Model::validateArray($this->aacHeaders);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aacHeaders) {
            if (\is_array($this->aacHeaders)) {
                $res['AacHeaders'] = [];
                $n1 = 0;
                foreach ($this->aacHeaders as $item1) {
                    $res['AacHeaders'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AacHeaders'])) {
            if (!empty($map['AacHeaders'])) {
                $model->aacHeaders = [];
                $n1 = 0;
                foreach ($map['AacHeaders'] as $item1) {
                    $model->aacHeaders[$n1] = self::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
