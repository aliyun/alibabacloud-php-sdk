<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\Tea\Model;

class DescribeZonesRequest extends Model
{
    /**
     * @var string
     */
    public $deployType;

    /**
     * @var string
     */
    public $series;
    protected $_name = [
        'deployType' => 'DeployType',
        'series'     => 'Series',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deployType) {
            $res['DeployType'] = $this->deployType;
        }
        if (null !== $this->series) {
            $res['Series'] = $this->series;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeZonesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeployType'])) {
            $model->deployType = $map['DeployType'];
        }
        if (isset($map['Series'])) {
            $model->series = $map['Series'];
        }

        return $model;
    }
}
