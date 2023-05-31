<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeVulCheckTaskStatusDetailResponseBody\taskStatuses;

use AlibabaCloud\Tea\Model;

class taskStatusList extends Model
{
    /**
     * @description The error code returned.
     *
     * @example push_command_failed
     *
     * @var string
     */
    public $code;

    /**
     * @description The status of the subtask. Valid values:
     *
     *   **0**: unhandled
     *   **1**: collecting
     *   **2**: collected
     *   **3**: matching
     *   **4**: complete
     *
     * @example 4
     *
     * @var string
     */
    public $status;

    /**
     * @description The type of the vulnerability. Valid values:
     *
     *   **cve**: Linux software vulnerability
     *   **sys**: Windows system vulnerability
     *   **cms**: Web-CMS vulnerability
     *   **sca**: vulnerability that is detected based on software component analysis
     *
     * @example cve
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'code'   => 'Code',
        'status' => 'Status',
        'type'   => 'Type',
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
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return taskStatusList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
