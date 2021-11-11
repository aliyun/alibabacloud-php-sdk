<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\GetRegionConfigurationResponseBody\result;

use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\GetRegionConfigurationResponseBody\result\kibanaNodeProperties\amountRange;
use AlibabaCloud\Tea\Model;

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
        if (null !== $this->spec) {
            $res['spec'] = $this->spec;
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
        if (isset($map['amountRange'])) {
            $model->amountRange = amountRange::fromMap($map['amountRange']);
        }
        if (isset($map['spec'])) {
            if (!empty($map['spec'])) {
                $model->spec = $map['spec'];
            }
        }

        return $model;
    }
}
