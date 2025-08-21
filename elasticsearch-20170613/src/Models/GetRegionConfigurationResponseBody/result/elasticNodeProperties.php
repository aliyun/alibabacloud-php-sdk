<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\GetRegionConfigurationResponseBody\result;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\GetRegionConfigurationResponseBody\result\elasticNodeProperties\amountRange;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\GetRegionConfigurationResponseBody\result\elasticNodeProperties\diskList;

class elasticNodeProperties extends Model
{
    /**
     * @var amountRange
     */
    public $amountRange;

    /**
     * @var diskList[]
     */
    public $diskList;

    /**
     * @var string[]
     */
    public $spec;
    protected $_name = [
        'amountRange' => 'amountRange',
        'diskList' => 'diskList',
        'spec' => 'spec',
    ];

    public function validate()
    {
        if (null !== $this->amountRange) {
            $this->amountRange->validate();
        }
        if (\is_array($this->diskList)) {
            Model::validateArray($this->diskList);
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

        if (null !== $this->diskList) {
            if (\is_array($this->diskList)) {
                $res['diskList'] = [];
                $n1 = 0;
                foreach ($this->diskList as $item1) {
                    $res['diskList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->spec) {
            if (\is_array($this->spec)) {
                $res['spec'] = [];
                $n1 = 0;
                foreach ($this->spec as $item1) {
                    $res['spec'][$n1] = $item1;
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
        if (isset($map['amountRange'])) {
            $model->amountRange = amountRange::fromMap($map['amountRange']);
        }

        if (isset($map['diskList'])) {
            if (!empty($map['diskList'])) {
                $model->diskList = [];
                $n1 = 0;
                foreach ($map['diskList'] as $item1) {
                    $model->diskList[$n1] = diskList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['spec'])) {
            if (!empty($map['spec'])) {
                $model->spec = [];
                $n1 = 0;
                foreach ($map['spec'] as $item1) {
                    $model->spec[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
