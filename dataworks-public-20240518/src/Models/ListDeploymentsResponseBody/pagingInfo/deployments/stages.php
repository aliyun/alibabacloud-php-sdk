<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDeploymentsResponseBody\pagingInfo\deployments;

use AlibabaCloud\Tea\Model;

class stages extends Model
{
    /**
     * @description The code of the stage.
     *
     * @example DEV_CHECK
     *
     * @var string
     */
    public $code;

    /**
     * @description The description of the stage.
     *
     * @example Check before going online to development
     *
     * @var string
     */
    public $description;

    /**
     * @description The additional information about the stage.
     *
     * @var mixed[]
     */
    public $detail;

    /**
     * @description The error message returned during the stage.
     *
     * @example Error message
     *
     * @var string
     */
    public $message;

    /**
     * @description The name of the stage.
     *
     * @example Check before going online to development
     *
     * @var string
     */
    public $name;

    /**
     * @description The status of the stage.
     *
     * Valid values:
     *
     *   Init
     *   Running
     *   Success
     *   Fail
     *   Termination
     *   Cancel
     *
     * @example RUNNING
     *
     * @var string
     */
    public $status;

    /**
     * @description The step number of the stage.
     *
     * @example 1
     *
     * @var int
     */
    public $step;

    /**
     * @description The type of the stage. This parameter indicates the operation type in the stage.
     *
     * Valid values:
     *
     *   Deploy
     *   Check
     *   Offline
     *   Build
     *   Delete
     *
     * @example CHECK
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'code' => 'Code',
        'description' => 'Description',
        'detail' => 'Detail',
        'message' => 'Message',
        'name' => 'Name',
        'status' => 'Status',
        'step' => 'Step',
        'type' => 'Type',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->detail) {
            $res['Detail'] = $this->detail;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->step) {
            $res['Step'] = $this->step;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return stages
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Detail'])) {
            $model->detail = $map['Detail'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Step'])) {
            $model->step = $map['Step'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
