<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\ListAddonsResponseBody\data\environments\policies;

use AlibabaCloud\Tea\Model;

class metricCheckRule extends Model
{
    /**
     * @description The PromQL statements.
     *
     * @var string[]
     */
    public $promQL;
    protected $_name = [
        'promQL' => 'PromQL',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->promQL) {
            $res['PromQL'] = $this->promQL;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return metricCheckRule
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PromQL'])) {
            if (!empty($map['PromQL'])) {
                $model->promQL = $map['PromQL'];
            }
        }

        return $model;
    }
}
