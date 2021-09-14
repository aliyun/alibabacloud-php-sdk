<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cddc\V20200320\Models\DescribeDedicatedInstanceMetricResponseBody\metrics\metrics;

use AlibabaCloud\Tea\Model;

class risks extends Model
{
    /**
     * @var string[]
     */
    public $risks;
    protected $_name = [
        'risks' => 'Risks',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->risks) {
            $res['Risks'] = $this->risks;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return risks
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Risks'])) {
            if (!empty($map['Risks'])) {
                $model->risks = $map['Risks'];
            }
        }

        return $model;
    }
}
