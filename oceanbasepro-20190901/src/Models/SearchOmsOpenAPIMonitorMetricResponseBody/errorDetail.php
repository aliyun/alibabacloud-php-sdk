<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\SearchOmsOpenAPIMonitorMetricResponseBody;

use AlibabaCloud\Tea\Model;

class errorDetail extends Model
{
    /**
     * @description The information about the object.
     *
     * @example CM-RESOAT111111
     *
     * @var string
     */
    public $code;

    /**
     * @description The error code (old).
     *
     * @example ERROR
     *
     * @var string
     */
    public $level;

    /**
     * @description The ID of the project to query.
     *
     * @example The information about the object to query.
     *
     * @var string
     */
    public $message;

    /**
     * @description The error description (new).
     *
     * @example The query metric. For example, if you want to query the incremental transactions per second (TPS), set the value to CONNECTOR_TPS. Valid values: CONNECTOR_TPS: the TPS of the Connector component; CONNECTOR_DELAY: the latency of the Connector component; CONNECTOR_SOURCE_QUEUE_SIZE: the queue size of the Connector source; CONNECTOR_IOPS: the Connector IOPS; CONNECTOR_WRITE_COST: the time spent in writing at the Connector destination; CONNECTOR_SOURCE_READ_COST: the time spent in reading at the Connector source; JDBCWRITER_DELAY: the latency of the JDBCWriter; JDBCWRITER_IOPS: the IOPS of the JDBCWriter; JDBCWRITER_RPS: the requests per second (RPS) of the JDBCWriter; STORE_DELAY: the latency of the Store component; STORE_CONN: the number of store connections; STORE_IOPS: the IOPS of the Store component; STORE_TPS: the TPS of the Store component; CHECKER_SOURCE_NONE_RPS: the instantaneous RPS of the Checker component at the source end during full migration; CHECKER_SOURCE_AVG_RPS: the average RPS of the Checker component at the source end during full migration; CHECKER_DEST_NONE_RPS: the instantaneous RPS of the Checker component at the destination end during full migration; CHECKER_DEST_AVG_RPS: the average RPS of the Checker component at the destination end during full migration; CHECKER_SOURCE_NONE_RT: the instantaneous response time (RT) of the Checker component at the source end during full migration; CHECKER_SOURCE_AVG_RT: the average RT of the Checker component at the source end during full migration; CHECKER_DEST_NONE_RT: the instantaneous RT of the Checker component at the destination end during full migration; CHECKER_DEST_AVG_RT: the average RT of the Checker component at the destination end during full migration; CHECKER_SOURCE_NONE_READ_IOPS: the instantaneous read IOPS of the Checker component at the source end during full migration; CHECKER_SOURCE_AVG_READ_IOPS: the average read IOPS of the Checker component at the source end during full migration; CHECKER_DEST_NONE_WRITE_IOPS: the instantaneous write IOPS of the Checker component at the destination end during full migration; CHECKER_DEST_AVG_WRITE_IOPS: the average write IOPS of the Checker component at the destination end during full migration; CHECKER_VERIFY_SOURCE_NONE_RPS: the instantaneous RPS of the Checker-Verify component at the source end during full verification; CHECKER_VERIFY_SOURCE_AVG_RPS: the average RPS of the Checker-Verify component at the source end during full verification; CHECKER_VERIFY_DEST_NONE_RPS: the instantaneous RPS of the Checker-Verify component at the destination end during full verification; CHECKER_VERIFY_DEST_AVG_RPS: the average RPS of the Checker-Verify component at the destination end during full verification; CHECKER_VERIFY_SOURCE_NONE_RT: the instantaneous RT of the Checker-Verify component at the source end during full verification; CHECKER_VERIFY_SOURCE_AVG_RT: the average RT of the Checker-Verify component at the source end during full verification; CHECKER_VERIFY_DEST_NONE_RT: the instantaneous RT of the Checker-Verify component at the destination end during full verification; CHECKER_VERIFY_DEST_AVG_RT: the average RT of the Checker-Verify component at the destination end during full verification; CHECKER_VERIFY_SOURCE_NONE_READ_IOPS: the instantaneous read IOPS of the Checker-Verify component at the source end during full verification; CHECKER_VERIFY_SOURCE_AVG_READ_IOPS: the average read IOPS of the Checker-Verify component at the source end during full verification; CHECKER_VERIFY_DEST_NONE_READ_IOPS: the instantaneous read IOPS of the Checker-Verify component at the destination end during full verification; and CHECKER_VERIFY_DEST_AVG_READ_IOPS: the average read IOPS of the Checker-Verify component at the destination end during full verification.
     *
     * @var string
     */
    public $proposal;
    protected $_name = [
        'code'     => 'Code',
        'level'    => 'Level',
        'message'  => 'Message',
        'proposal' => 'Proposal',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->proposal) {
            $res['Proposal'] = $this->proposal;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return errorDetail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Proposal'])) {
            $model->proposal = $map['Proposal'];
        }

        return $model;
    }
}
