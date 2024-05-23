<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\Tea\Model;

class ModifyInstanceNodeNumRequest extends Model
{
    /**
     * @description Specifies whether to perform only a dry run for the request. Default value: false. Valid values:
     * - false: The actual request is sent and no dry run is performed. The number of nodes is changed if the requirements are met. By default, the DryRunResult parameter returns false if you set DryRun to false.
     * @example true
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @description The ID of the OceanBase cluster.
     *
     * This parameter is required.
     * @example ob317v4uif****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The number of nodes in the cluster. If the cluster is deployed in n-n-n mode, the number of nodes in the cluster equals n × 3.
     *
     * This parameter is required.
     * @example 6
     *
     * @var string
     */
    public $nodeNum;
    protected $_name = [
        'dryRun'     => 'DryRun',
        'instanceId' => 'InstanceId',
        'nodeNum'    => 'NodeNum',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->nodeNum) {
            $res['NodeNum'] = $this->nodeNum;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyInstanceNodeNumRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['NodeNum'])) {
            $model->nodeNum = $map['NodeNum'];
        }

        return $model;
    }
}
