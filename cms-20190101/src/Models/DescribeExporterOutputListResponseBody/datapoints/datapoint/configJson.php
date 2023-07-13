<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeExporterOutputListResponseBody\datapoints\datapoint;

use AlibabaCloud\Tea\Model;

class configJson extends Model
{
    /**
     * @description The AccessKey ID.
     *
     * @example LTAIpY33********
     *
     * @var string
     */
    public $ak;

    /**
     * @description The Log Service endpoint to which the monitoring data is exported.
     *
     * @example http://cn-qingdao-share.log.aliyuncs.com
     *
     * @var string
     */
    public $endpoint;

    /**
     * @description The Logstore.
     *
     * @example monitorlogstore
     *
     * @var string
     */
    public $logstore;

    /**
     * @description The Log Service project to which the monitoring data is exported.
     *
     * @example exporter
     *
     * @var string
     */
    public $project;
    protected $_name = [
        'ak'       => 'ak',
        'endpoint' => 'endpoint',
        'logstore' => 'logstore',
        'project'  => 'project',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ak) {
            $res['ak'] = $this->ak;
        }
        if (null !== $this->endpoint) {
            $res['endpoint'] = $this->endpoint;
        }
        if (null !== $this->logstore) {
            $res['logstore'] = $this->logstore;
        }
        if (null !== $this->project) {
            $res['project'] = $this->project;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return configJson
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ak'])) {
            $model->ak = $map['ak'];
        }
        if (isset($map['endpoint'])) {
            $model->endpoint = $map['endpoint'];
        }
        if (isset($map['logstore'])) {
            $model->logstore = $map['logstore'];
        }
        if (isset($map['project'])) {
            $model->project = $map['project'];
        }

        return $model;
    }
}
