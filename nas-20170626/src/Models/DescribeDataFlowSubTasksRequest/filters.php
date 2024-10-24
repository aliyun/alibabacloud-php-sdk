<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\DescribeDataFlowSubTasksRequest;

use AlibabaCloud\Tea\Model;

class filters extends Model
{
    /**
     * @description The filter name.
     *
     * Valid values:
     *
     *   DataFlowIds: filters data flow subtasks by data flow ID.
     *   DataFlowTaskIds: filters data flow subtasks by data flow task ID.
     *   DataFlowSubTaskIds: filters data flow subtasks by data streaming task ID.
     *   Status: filters data flow subtasks by status.
     *   SrcFilePath: filters data flow subtasks by source file path.
     *   DstFilePath: filters data flow subtasks by destination file path.
     *
     * @example DataFlowSubTaskIds
     *
     * @var string
     */
    public $key;

    /**
     * @description The filter value. This parameter does not support wildcards.
     *
     *   If Key is set to DataFlowIds, set Value to a data flow ID or a part of the data flow ID. You can specify a data flow ID or a group of data flow IDs. You can specify a maximum of 10 data flow IDs. Example: `df-194433a5be31****` or `df-194433a5be31****,df-244433a5be31****`.
     *   If Key is set to DataFlowTaskIds, set Value to a data flow task ID or a part of the data flow task ID. You can specify a data flow task ID or a group of data flow task IDs. You can specify a maximum of 10 data flow task IDs. Example:  `task-38aa8e890f45****` or `task-38aa8e890f45****,task-27aa8e890f45****`.
     *   If Key is set to DataFlowSubTaskIds, set Value to a data streaming task ID or a part of the data streaming task ID. You can specify a data streaming task ID or a group of data streaming task IDs. You can specify a maximum of 10 data streaming task IDs. Example: ` subTaskId-370kyfmyknxcyzw****  `or `subTaskId-370kyfmyknxcyzw****,subTaskId-280kyfmyknxcyzw****`.
     *   If Key is set to Status, set Value to the status of the data flow task. The status can be EXPIRED, CREATED, RUNNING, COMPLETE, CANCELING, FAILED, or CANCELED. Combined query is supported.
     *   If Key is set to SrcFilePath, set Value to the path of the source file. The path can be up to 1,023 characters in length.
     *   If Key is set to DstFilePath, set Value to the path of the destination file. The path can be up to 1,023 characters in length.
     *
     * @example subTaskId-370kyfmyknxcyzw****
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'key'   => 'Key',
        'value' => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return filters
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
