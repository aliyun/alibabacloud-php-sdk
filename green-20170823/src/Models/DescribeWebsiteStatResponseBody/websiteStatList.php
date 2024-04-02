<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20170823\Models\DescribeWebsiteStatResponseBody;

use AlibabaCloud\Tea\Model;

class websiteStatList extends Model
{
    /**
     * @var int
     */
    public $instanceCount;

    /**
     * @var int
     */
    public $riskCount;

    /**
     * @var int
     */
    public $scanCount;

    /**
     * @var string
     */
    public $subServiceModule;
    protected $_name = [
        'instanceCount'    => 'InstanceCount',
        'riskCount'        => 'RiskCount',
        'scanCount'        => 'ScanCount',
        'subServiceModule' => 'SubServiceModule',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceCount) {
            $res['InstanceCount'] = $this->instanceCount;
        }
        if (null !== $this->riskCount) {
            $res['RiskCount'] = $this->riskCount;
        }
        if (null !== $this->scanCount) {
            $res['ScanCount'] = $this->scanCount;
        }
        if (null !== $this->subServiceModule) {
            $res['SubServiceModule'] = $this->subServiceModule;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return websiteStatList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceCount'])) {
            $model->instanceCount = $map['InstanceCount'];
        }
        if (isset($map['RiskCount'])) {
            $model->riskCount = $map['RiskCount'];
        }
        if (isset($map['ScanCount'])) {
            $model->scanCount = $map['ScanCount'];
        }
        if (isset($map['SubServiceModule'])) {
            $model->subServiceModule = $map['SubServiceModule'];
        }

        return $model;
    }
}
