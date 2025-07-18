<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\ListApprovalProcessesForApprovalSchemasResponseBody\schemas;

use AlibabaCloud\Tea\Model;

class processes extends Model
{
    /**
     * @example 2022-10-25 10:44:09
     *
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @example approval-process-dc61e92ba5c5****
     *
     * @var string
     */
    public $processId;

    /**
     * @var string
     */
    public $processName;
    protected $_name = [
        'createTime' => 'CreateTime',
        'description' => 'Description',
        'processId' => 'ProcessId',
        'processName' => 'ProcessName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->processId) {
            $res['ProcessId'] = $this->processId;
        }
        if (null !== $this->processName) {
            $res['ProcessName'] = $this->processName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return processes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ProcessId'])) {
            $model->processId = $map['ProcessId'];
        }
        if (isset($map['ProcessName'])) {
            $model->processName = $map['ProcessName'];
        }

        return $model;
    }
}
