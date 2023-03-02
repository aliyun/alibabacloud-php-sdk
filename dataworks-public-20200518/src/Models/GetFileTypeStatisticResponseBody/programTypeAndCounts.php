<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetFileTypeStatisticResponseBody;

use AlibabaCloud\Tea\Model;

class programTypeAndCounts extends Model
{
    /**
     * @description The number of nodes.
     *
     * @example 1
     *
     * @var int
     */
    public $count;

    /**
     * @description The type of the node.
     *
     * 6 (Shell node), 10 (ODPS SQL node), 11 (ODPS MR node), 23 (Data Integration node), 24 (ODPS Script node), 99 (zero load node), 221 (PyODPS 2 node), 225 (ODPS Spark node), 227 (EMR Hive node), 228 (EMR Spark node), 229 (EMR Spark SQL node), 230 (EMR MR node), 239 (OSS object inspection node), 257 (EMR Shell node), 258 (EMR Spark Shell node), 259 (EMR Presto node), 260 (EMR Impala node), 900 (real-time data synchronization node), 1089 (cross-tenant collaboration node), 1091 (Hologres development node), 1093 (Hologres SQL node), 1100 (assignment node), and 1221 (PyODPS 3 node).
     * @example ODPS_SQL
     *
     * @var string
     */
    public $programType;
    protected $_name = [
        'count'       => 'Count',
        'programType' => 'ProgramType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->programType) {
            $res['ProgramType'] = $this->programType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return programTypeAndCounts
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['ProgramType'])) {
            $model->programType = $map['ProgramType'];
        }

        return $model;
    }
}
