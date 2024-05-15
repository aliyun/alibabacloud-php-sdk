<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models;

use AlibabaCloud\Tea\Model;

class CreateCacheAnalysisJobRequest extends Model
{
    /**
     * @description The ID of the backup file. You can call the [DescribeBackups](https://help.aliyun.com/document_detail/61081.html) operation to query the ID.
     *
     *   If you need to specify multiple backup file IDs, separate them with commas (,). For example, you can set this parameter to `12345,67890`.
     *   If you do not specify this parameter, the system automatically backs up the task and performs cache analysis on the backup file.
     *
     * @example 12345
     *
     * @var string
     */
    public $backupSetId;

    /**
     * @description The ID of the ApsaraDB for Redis instance.
     *
     * This parameter is required.
     * @example r-bp18ff4a195d****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The ID of the data node on the instance. You can specify this parameter to query the monitoring information about the specified node.
     *
     * >  If you specify the BackupSetId parameter, the system ignores the NodeId parameter. You can call the [DescribeLogicInstanceTopology](https://help.aliyun.com/document_detail/94665.html) operation to query the node ID.
     * @example r-x****-db-0
     *
     * @var string
     */
    public $nodeId;

    /**
     * @description The delimiters used to identify the prefixes of keys. You do not need to specify this parameter if one or more of the following default delimiters are used: `: ; , _ - + @ = | #`
     *
     * @example &
     *
     * @var string
     */
    public $separators;
    protected $_name = [
        'backupSetId' => 'BackupSetId',
        'instanceId'  => 'InstanceId',
        'nodeId'      => 'NodeId',
        'separators'  => 'Separators',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backupSetId) {
            $res['BackupSetId'] = $this->backupSetId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->separators) {
            $res['Separators'] = $this->separators;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateCacheAnalysisJobRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackupSetId'])) {
            $model->backupSetId = $map['BackupSetId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['Separators'])) {
            $model->separators = $map['Separators'];
        }

        return $model;
    }
}
