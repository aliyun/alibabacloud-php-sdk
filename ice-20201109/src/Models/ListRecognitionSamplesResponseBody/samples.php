<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\ListRecognitionSamplesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListRecognitionSamplesResponseBody\samples\sample;

class samples extends Model
{
    /**
     * @var sample[]
     */
    public $sample;
    protected $_name = [
        'sample' => 'Sample',
    ];

    public function validate()
    {
        if (\is_array($this->sample)) {
            Model::validateArray($this->sample);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->sample) {
            if (\is_array($this->sample)) {
                $res['Sample'] = [];
                $n1 = 0;
                foreach ($this->sample as $item1) {
                    $res['Sample'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Sample'])) {
            if (!empty($map['Sample'])) {
                $model->sample = [];
                $n1 = 0;
                foreach ($map['Sample'] as $item1) {
                    $model->sample[$n1] = sample::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
