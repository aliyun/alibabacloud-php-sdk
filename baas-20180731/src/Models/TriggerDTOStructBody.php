<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models;

use AlibabaCloud\Tea\Model;

class TriggerDTOStructBody extends Model
{
    /**
     * @var CheckPointStructBody
     */
    public $checkpoint;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $option;

    /**
     * @var string
     */
    public $pendingErrorLogs;

    /**
     * @var string
     */
    public $source;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'checkpoint'       => 'Checkpoint',
        'createTime'       => 'CreateTime',
        'errorMessage'     => 'ErrorMessage',
        'name'             => 'Name',
        'option'           => 'Option',
        'pendingErrorLogs' => 'PendingErrorLogs',
        'source'           => 'Source',
        'status'           => 'Status',
        'type'             => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkpoint) {
            $res['Checkpoint'] = null !== $this->checkpoint ? $this->checkpoint->toMap() : null;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->option) {
            $res['Option'] = $this->option;
        }
        if (null !== $this->pendingErrorLogs) {
            $res['PendingErrorLogs'] = $this->pendingErrorLogs;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
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
     * @return TriggerDTOStructBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Checkpoint'])) {
            $model->checkpoint = CheckPointStructBody::fromMap($map['Checkpoint']);
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Option'])) {
            $model->option = $map['Option'];
        }
        if (isset($map['PendingErrorLogs'])) {
            $model->pendingErrorLogs = $map['PendingErrorLogs'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
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
