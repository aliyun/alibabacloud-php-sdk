<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\GetRegionConfigurationResponseBody\result;

use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\GetRegionConfigurationResponseBody\result\warmNodeProperties\amountRange;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\GetRegionConfigurationResponseBody\result\warmNodeProperties\diskList;
use AlibabaCloud\Tea\Model;

class warmNodeProperties extends Model
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
        'diskList'    => 'diskList',
        'spec'        => 'spec',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->amountRange) {
            $res['amountRange'] = null !== $this->amountRange ? $this->amountRange->toMap() : null;
        }
        if (null !== $this->diskList) {
            $res['diskList'] = [];
            if (null !== $this->diskList && \is_array($this->diskList)) {
                $n = 0;
                foreach ($this->diskList as $item) {
                    $res['diskList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->spec) {
            $res['spec'] = $this->spec;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return warmNodeProperties
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['amountRange'])) {
            $model->amountRange = amountRange::fromMap($map['amountRange']);
        }
        if (isset($map['diskList'])) {
            if (!empty($map['diskList'])) {
                $model->diskList = [];
                $n               = 0;
                foreach ($map['diskList'] as $item) {
                    $model->diskList[$n++] = null !== $item ? diskList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['spec'])) {
            if (!empty($map['spec'])) {
                $model->spec = $map['spec'];
            }
        }

        return $model;
    }
}
