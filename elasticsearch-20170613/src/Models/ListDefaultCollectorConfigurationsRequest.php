<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models;

use AlibabaCloud\Tea\Model;

class ListDefaultCollectorConfigurationsRequest extends Model
{
    /**
     * @description The shipper type. Valid values:
     *
     *   fileBeat
     *   metricBeat
     *   heartBeat
     *   auditBeat
     *
     * @example fileBeat
     *
     * @var string
     */
    public $resType;

    /**
     * @description The shipper version. The shipper version varies based on the type of the machine on which the shipper is deployed. Valid values:
     *
     *   ECS: 6.8.5\_with_community
     *   ACK: 6.8.13\_with_community
     *
     * @example 6.8.5_with_community
     *
     * @var string
     */
    public $resVersion;

    /**
     * @description The type of the machine on which the shipper is deployed. If you do not configure this parameter, the default configuration files of shippers deployed on all types of machines are returned. Valid values:
     *
     *   ECS: ECS instance
     *   ACK: ACK cluster
     *
     * @example ECS
     *
     * @var string
     */
    public $sourceType;
    protected $_name = [
        'resType'    => 'resType',
        'resVersion' => 'resVersion',
        'sourceType' => 'sourceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resType) {
            $res['resType'] = $this->resType;
        }
        if (null !== $this->resVersion) {
            $res['resVersion'] = $this->resVersion;
        }
        if (null !== $this->sourceType) {
            $res['sourceType'] = $this->sourceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDefaultCollectorConfigurationsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['resType'])) {
            $model->resType = $map['resType'];
        }
        if (isset($map['resVersion'])) {
            $model->resVersion = $map['resVersion'];
        }
        if (isset($map['sourceType'])) {
            $model->sourceType = $map['sourceType'];
        }

        return $model;
    }
}
