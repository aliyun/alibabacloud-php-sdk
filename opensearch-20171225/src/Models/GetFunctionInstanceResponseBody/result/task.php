<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models\GetFunctionInstanceResponseBody\result;

use AlibabaCloud\Tea\Model;

class task extends Model
{
    /**
     * @var string
     */
    public $dagStatus;

    /**
     * @var int
     */
    public $lastRunTime;
    protected $_name = [
        'dagStatus'   => 'DagStatus',
        'lastRunTime' => 'LastRunTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dagStatus) {
            $res['DagStatus'] = $this->dagStatus;
        }
        if (null !== $this->lastRunTime) {
            $res['LastRunTime'] = $this->lastRunTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return task
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DagStatus'])) {
            $model->dagStatus = $map['DagStatus'];
        }
        if (isset($map['LastRunTime'])) {
            $model->lastRunTime = $map['LastRunTime'];
        }

        return $model;
    }
}
