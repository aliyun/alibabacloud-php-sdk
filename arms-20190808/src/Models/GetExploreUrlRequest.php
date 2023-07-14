<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class GetExploreUrlRequest extends Model
{
    /**
     * @description The cluster ID.
     *
     * @example c9cc4c5e220f8461f9d71b6ec6e******
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The query statement that corresponds to the data source.
     *
     * @example {app="buy2"}
     *
     * @var string
     */
    public $expression;

    /**
     * @description The region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The type of the Grafana data source.
     *
     * @example prometheus
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'clusterId'  => 'ClusterId',
        'expression' => 'Expression',
        'regionId'   => 'RegionId',
        'type'       => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->expression) {
            $res['Expression'] = $this->expression;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetExploreUrlRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['Expression'])) {
            $model->expression = $map['Expression'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
