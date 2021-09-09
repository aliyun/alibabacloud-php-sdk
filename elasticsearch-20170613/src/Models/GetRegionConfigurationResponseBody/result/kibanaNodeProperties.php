<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\GetRegionConfigurationResponseBody\result;

use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\GetRegionConfigurationResponseBody\result\kibanaNodeProperties\amountRange;
use AlibabaCloud\Tea\Model;

class kibanaNodeProperties extends Model
{
    /**
     * @var string[]
     */
    public $spec;

    /**
     * @var amountRange
     */
    public $amountRange;
    protected $_name = [
        'spec'        => 'spec',
        'amountRange' => 'amountRange',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->spec) {
            $res['spec'] = $this->spec;
        }
        if (null !== $this->amountRange) {
            $res['amountRange'] = null !== $this->amountRange ? $this->amountRange->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return kibanaNodeProperties
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['spec'])) {
            if (!empty($map['spec'])) {
                $model->spec = $map['spec'];
            }
        }
        if (isset($map['amountRange'])) {
            $model->amountRange = amountRange::fromMap($map['amountRange']);
        }

        return $model;
    }
}
