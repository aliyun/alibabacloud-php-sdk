<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetQualityArchiveTableProgressResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $archiveTableId;

    /**
     * @var string
     */
    public $archiveTableName;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'archiveTableId' => 'ArchiveTableId',
        'archiveTableName' => 'ArchiveTableName',
        'errorMessage' => 'ErrorMessage',
        'status' => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->archiveTableId) {
            $res['ArchiveTableId'] = $this->archiveTableId;
        }

        if (null !== $this->archiveTableName) {
            $res['ArchiveTableName'] = $this->archiveTableName;
        }

        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['ArchiveTableId'])) {
            $model->archiveTableId = $map['ArchiveTableId'];
        }

        if (isset($map['ArchiveTableName'])) {
            $model->archiveTableName = $map['ArchiveTableName'];
        }

        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
