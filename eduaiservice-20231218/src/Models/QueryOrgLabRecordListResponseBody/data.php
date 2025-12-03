<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eduaiservice\V20231218\Models\QueryOrgLabRecordListResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $createdAt;

    /**
     * @var string
     */
    public $labRecordId;

    /**
     * @var int
     */
    public $status;

    /**
     * @var int
     */
    public $submittedAt;
    protected $_name = [
        'createdAt' => 'CreatedAt',
        'labRecordId' => 'LabRecordId',
        'status' => 'Status',
        'submittedAt' => 'SubmittedAt',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createdAt) {
            $res['CreatedAt'] = $this->createdAt;
        }

        if (null !== $this->labRecordId) {
            $res['LabRecordId'] = $this->labRecordId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->submittedAt) {
            $res['SubmittedAt'] = $this->submittedAt;
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
        if (isset($map['CreatedAt'])) {
            $model->createdAt = $map['CreatedAt'];
        }

        if (isset($map['LabRecordId'])) {
            $model->labRecordId = $map['LabRecordId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['SubmittedAt'])) {
            $model->submittedAt = $map['SubmittedAt'];
        }

        return $model;
    }
}
