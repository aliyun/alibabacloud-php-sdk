<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetBatchChangeTableOwnerStatusResponseBody\data;

use AlibabaCloud\Dara\Model;

class details extends Model
{
    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $tableMetaEntityId;
    protected $_name = [
        'errorMessage' => 'ErrorMessage',
        'status' => 'Status',
        'tableMetaEntityId' => 'TableMetaEntityId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->tableMetaEntityId) {
            $res['TableMetaEntityId'] = $this->tableMetaEntityId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TableMetaEntityId'])) {
            $model->tableMetaEntityId = $map['TableMetaEntityId'];
        }

        return $model;
    }
}
