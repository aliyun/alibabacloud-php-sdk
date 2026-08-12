<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models\GetDataPipelineResponseBody\pipeline\processors\config;

use AlibabaCloud\Dara\Model;

class selector extends Model
{
    /**
     * @var string[]
     */
    public $serviceNames;
    protected $_name = [
        'serviceNames' => 'serviceNames',
    ];

    public function validate()
    {
        if (\is_array($this->serviceNames)) {
            Model::validateArray($this->serviceNames);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->serviceNames) {
            if (\is_array($this->serviceNames)) {
                $res['serviceNames'] = [];
                $n1 = 0;
                foreach ($this->serviceNames as $item1) {
                    $res['serviceNames'][$n1] = $item1;
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
        if (isset($map['serviceNames'])) {
            if (!empty($map['serviceNames'])) {
                $model->serviceNames = [];
                $n1 = 0;
                foreach ($map['serviceNames'] as $item1) {
                    $model->serviceNames[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
