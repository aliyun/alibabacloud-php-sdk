<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models;

use AlibabaCloud\Tea\Model;

class GetRequestDiagnosisResultRequest extends Model
{
    /**
     * @description The instance ID.
     *
     * @example rm-0iwhhl8gx0ld6****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The unique ID of the diagnostics task. You can call the [CreateRequestDiagnosis](~~341609~~) operation to query the diagnostics task ID.
     *
     * @example 61820b594664275c4429****
     *
     * @var string
     */
    public $messageId;

    /**
     * @description The node ID.
     *
     * >  You must specify the node ID if your database instance is a PolarDB for MySQL cluster, a PolarDB for PostgreSQL (compatible with Oracle) instance, or an ApsaraDB for MongoDB database.
     * @example 202****
     *
     * @var string
     */
    public $nodeId;

    /**
     * @description The source of the task.
     *
     * >  This parameter is required if you call this operation in the DAS console. You do not need to specify this parameter when you call this operation.
     * @example None
     *
     * @var string
     */
    public $source;

    /**
     * @description The SQL template ID.
     *
     * >  This parameter is required if you call this operation in the DAS console. You do not need to specify this parameter when you call this operation.
     * @example None
     *
     * @var string
     */
    public $sqlId;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'messageId'  => 'MessageId',
        'nodeId'     => 'NodeId',
        'source'     => 'Source',
        'sqlId'      => 'SqlId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->messageId) {
            $res['MessageId'] = $this->messageId;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->sqlId) {
            $res['SqlId'] = $this->sqlId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetRequestDiagnosisResultRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['MessageId'])) {
            $model->messageId = $map['MessageId'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['SqlId'])) {
            $model->sqlId = $map['SqlId'];
        }

        return $model;
    }
}
