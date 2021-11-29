<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\ListLocalDiskComponentInfoResponseBody\componentInfoList\componentInfo;

use AlibabaCloud\Tea\Model;

class apmMetrics extends Model
{
    /**
     * @var string[]
     */
    public $apmMetric;
    protected $_name = [
        'apmMetric' => 'ApmMetric',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apmMetric) {
            $res['ApmMetric'] = $this->apmMetric;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return apmMetrics
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApmMetric'])) {
            if (!empty($map['ApmMetric'])) {
                $model->apmMetric = $map['ApmMetric'];
            }
        }

        return $model;
    }
}
