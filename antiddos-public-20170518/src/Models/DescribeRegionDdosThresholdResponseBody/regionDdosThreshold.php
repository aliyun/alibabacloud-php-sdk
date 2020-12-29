<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Antiddospublic\V20170518\Models\DescribeRegionDdosThresholdResponseBody;

use AlibabaCloud\Tea\Model;

class regionDdosThreshold extends Model
{
    /**
     * @var int
     */
    public $elasticThreshold;

    /**
     * @var int
     */
    public $baseThreshold;
    protected $_name = [
        'elasticThreshold' => 'ElasticThreshold',
        'baseThreshold'    => 'BaseThreshold',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->elasticThreshold) {
            $res['ElasticThreshold'] = $this->elasticThreshold;
        }
        if (null !== $this->baseThreshold) {
            $res['BaseThreshold'] = $this->baseThreshold;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return regionDdosThreshold
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ElasticThreshold'])) {
            $model->elasticThreshold = $map['ElasticThreshold'];
        }
        if (isset($map['BaseThreshold'])) {
            $model->baseThreshold = $map['BaseThreshold'];
        }

        return $model;
    }
}
