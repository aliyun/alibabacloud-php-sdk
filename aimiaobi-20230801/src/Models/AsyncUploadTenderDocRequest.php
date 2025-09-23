<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Dara\Model;

class AsyncUploadTenderDocRequest extends Model
{
    /**
     * @var string
     */
    public $fileKey;

    /**
     * @var string
     */
    public $tenderDocName;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'fileKey' => 'FileKey',
        'tenderDocName' => 'TenderDocName',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fileKey) {
            $res['FileKey'] = $this->fileKey;
        }

        if (null !== $this->tenderDocName) {
            $res['TenderDocName'] = $this->tenderDocName;
        }

        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
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
        if (isset($map['FileKey'])) {
            $model->fileKey = $map['FileKey'];
        }

        if (isset($map['TenderDocName'])) {
            $model->tenderDocName = $map['TenderDocName'];
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
