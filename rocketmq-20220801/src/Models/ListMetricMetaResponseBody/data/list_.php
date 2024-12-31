<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models\ListMetricMetaResponseBody\data;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @example Bug
     *
     * @var string
     */
    public $category;

    /**
     * @example Using Serverless Devs to deploy the infrastructure of project:get-userinfo-v1-infrastructure-as-template-project
     *
     * @var string
     */
    public $description;

    /**
     * @example SendMessageCountPerInstance
     *
     * @var string
     */
    public $metricName;
    protected $_name = [
        'category'    => 'category',
        'description' => 'description',
        'metricName'  => 'metricName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->category) {
            $res['category'] = $this->category;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->metricName) {
            $res['metricName'] = $this->metricName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['category'])) {
            $model->category = $map['category'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['metricName'])) {
            $model->metricName = $map['metricName'];
        }

        return $model;
    }
}
