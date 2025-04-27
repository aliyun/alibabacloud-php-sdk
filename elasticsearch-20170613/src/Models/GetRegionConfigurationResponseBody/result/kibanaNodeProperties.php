<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\GetRegionConfigurationResponseBody\result;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\GetRegionConfigurationResponseBody\result\kibanaNodeProperties\amountRange;

class kibanaNodeProperties extends Model
{
    /**
     * @var amountRange
     */
    public $amountRange;

    /**
     * @var string[]
     */
    public $spec;
    protected $_name = [
        'amountRange' => 'amountRange',
        'spec' => 'spec',
    ];

    public function validate()
    {
        if (null !== $this->amountRange) {
            $this->amountRange->validate();
        }
        if (\is_array($this->spec)) {
            Model::validateArray($this->spec);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->amountRange) {
            $res['amountRange'] = null !== $this->amountRange ? $this->amountRange->toArray($noStream) : $this->amountRange;
        }

        if (null !== $this->spec) {
            if (\is_array($this->spec)) {
                $res['spec'] = [];
                $n1 = 0;
                foreach ($this->spec as $item1) {
                    $res['spec'][$n1++] = $item1;
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
        if (isset($map['amountRange'])) {
            $model->amountRange = amountRange::fromMap($map['amountRange']);
        }

        if (isset($map['spec'])) {
            if (!empty($map['spec'])) {
                $model->spec = [];
                $n1 = 0;
                foreach ($map['spec'] as $item1) {
                    $model->spec[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
