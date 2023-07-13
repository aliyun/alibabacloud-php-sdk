<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Tea\Model;

class PutExporterOutputRequest extends Model
{
    /**
     * @description The configuration set for exporting monitoring data. It is a JSON object string. The string must include the following fields:
     *
     *   endpoint: the endpoint of Log Service.
     *   project: the Log Service project to which monitoring data is exported.
     *   logstore: the Log Service Logstore to which the monitoring data is exported.
     *   ak: the AccessKey ID.
     *   as: the AccessKey secret.
     *
     * @example { "endpoint": "http://cn-qingdao-share.log.aliyuncs.com", "project": "exporter", "logstore": "exporter","ak": "LTAIp*******", "userId": "17754********", "as": "TxHwuJ8yAb3AU******"}
     *
     * @var string
     */
    public $configJson;

    /**
     * @description The description of the configuration set.
     *
     * @example Export CPU metrics
     *
     * @var string
     */
    public $desc;

    /**
     * @description The name of the configuration set.
     *
     * @example exporterConfig
     *
     * @var string
     */
    public $destName;

    /**
     * @description The service to which the monitoring data is exported.
     *
     * @example sls
     *
     * @var string
     */
    public $destType;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'configJson' => 'ConfigJson',
        'desc'       => 'Desc',
        'destName'   => 'DestName',
        'destType'   => 'DestType',
        'regionId'   => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configJson) {
            $res['ConfigJson'] = $this->configJson;
        }
        if (null !== $this->desc) {
            $res['Desc'] = $this->desc;
        }
        if (null !== $this->destName) {
            $res['DestName'] = $this->destName;
        }
        if (null !== $this->destType) {
            $res['DestType'] = $this->destType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PutExporterOutputRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfigJson'])) {
            $model->configJson = $map['ConfigJson'];
        }
        if (isset($map['Desc'])) {
            $model->desc = $map['Desc'];
        }
        if (isset($map['DestName'])) {
            $model->destName = $map['DestName'];
        }
        if (isset($map['DestType'])) {
            $model->destType = $map['DestType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
