<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeProjectMetaResponseBody\resources;

use AlibabaCloud\Tea\Model;

class resource extends Model
{
    /**
     * @description The description.
     *
     * @example CDN
     *
     * @var string
     */
    public $description;

    /**
     * @description The tags. Tags are used to filter services.
     *
     * Tags are returned in the following format: `[{"name":"Tag key","value":"Tag value"}, {"name":"Tag key","value":"Tag value"}]`. The following tags are commonly used:
     *
     *   alertUnit: the unit of the metric value in alerts. If the unit is small, the original metric value may be too large. In this case, you can use the `alertUnit` tag to specify an appropriate unit. This tag is used in CloudMonitor.
     *   minAlertPeriod: the minimum time interval to report a new alert. The interval is usually set to 1 minute.
     *   metricCategory: the service specification. Example: kvstore_sharding. An Alibaba Cloud service may have different specifications that are defined in the same namespace. You can use this parameter to distinguish between service specifications.
     *   is_alarm: specifies whether an alert rule can be set. We recommend that you do not use the special tags in the CloudMonitor console.
     *
     * @example [{"groupFlag":true}]
     *
     * @var string
     */
    public $labels;

    /**
     * @description The namespace of the cloud service. Format: `acs_Service name abbreviation`. For more information about namespaces, see [Appendix 1: Metrics](~~163515~~).
     *
     * @example acs_cdn
     *
     * @var string
     */
    public $namespace;
    protected $_name = [
        'description' => 'Description',
        'labels'      => 'Labels',
        'namespace'   => 'Namespace',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->labels) {
            $res['Labels'] = $this->labels;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resource
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Labels'])) {
            $model->labels = $map['Labels'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }

        return $model;
    }
}
