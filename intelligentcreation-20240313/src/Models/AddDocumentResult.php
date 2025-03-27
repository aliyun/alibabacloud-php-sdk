<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models;

use AlibabaCloud\Dara\Model;

class AddDocumentResult extends Model
{
    /**
     * @var string
     */
    public $docName;

    /**
     * @var DocumentInfo
     */
    public $documentInfo;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'docName' => 'docName',
        'documentInfo' => 'documentInfo',
        'errorMessage' => 'errorMessage',
        'success' => 'success',
    ];

    public function validate()
    {
        if (null !== $this->documentInfo) {
            $this->documentInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->docName) {
            $res['docName'] = $this->docName;
        }

        if (null !== $this->documentInfo) {
            $res['documentInfo'] = null !== $this->documentInfo ? $this->documentInfo->toArray($noStream) : $this->documentInfo;
        }

        if (null !== $this->errorMessage) {
            $res['errorMessage'] = $this->errorMessage;
        }

        if (null !== $this->success) {
            $res['success'] = $this->success;
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
        if (isset($map['docName'])) {
            $model->docName = $map['docName'];
        }

        if (isset($map['documentInfo'])) {
            $model->documentInfo = DocumentInfo::fromMap($map['documentInfo']);
        }

        if (isset($map['errorMessage'])) {
            $model->errorMessage = $map['errorMessage'];
        }

        if (isset($map['success'])) {
            $model->success = $map['success'];
        }

        return $model;
    }
}
