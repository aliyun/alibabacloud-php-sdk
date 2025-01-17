<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\QueryMediaCensorJobDetailResponseBody\mediaCensorJobDetail\vensorCensorResult\videoTimelines\videoTimeline;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\QueryMediaCensorJobDetailResponseBody\mediaCensorJobDetail\vensorCensorResult\videoTimelines\videoTimeline\censorResults\censorResult;

class censorResults extends Model
{
    /**
     * @var censorResult[]
     */
    public $censorResult;
    protected $_name = [
        'censorResult' => 'CensorResult',
    ];

    public function validate()
    {
        if (\is_array($this->censorResult)) {
            Model::validateArray($this->censorResult);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->censorResult) {
            if (\is_array($this->censorResult)) {
                $res['CensorResult'] = [];
                $n1                  = 0;
                foreach ($this->censorResult as $item1) {
                    $res['CensorResult'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['CensorResult'])) {
            if (!empty($map['CensorResult'])) {
                $model->censorResult = [];
                $n1                  = 0;
                foreach ($map['CensorResult'] as $item1) {
                    $model->censorResult[$n1++] = censorResult::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
