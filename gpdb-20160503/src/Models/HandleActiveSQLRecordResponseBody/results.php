<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\HandleActiveSQLRecordResponseBody;

use AlibabaCloud\Tea\Model;

class results extends Model
{
    /**
     * @description The process ID, which is a unique identifier of the query.
     *
     * @example 3003925
     *
     * @var string
     */
    public $pid;

    /**
     * @description Indicates whether the processing was successful. Valid values:
     *
     *   **false**
     *   **true**
     *
     * @example true
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'pid'    => 'Pid',
        'status' => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pid) {
            $res['Pid'] = $this->pid;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return results
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Pid'])) {
            $model->pid = $map['Pid'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
