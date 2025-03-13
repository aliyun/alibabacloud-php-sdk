<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models;

use AlibabaCloud\Tea\Model;

class AddDocumentResult extends Model
{
    /**
     * @example example.pdf
     *
     * @var string
     */
    public $docName;

    /**
     * @var DocumentInfo
     */
    public $documentInfo;

    /**
     * @example true
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'docName'      => 'docName',
        'documentInfo' => 'documentInfo',
        'errorMessage' => 'errorMessage',
        'success'      => 'success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->docName) {
            $res['docName'] = $this->docName;
        }
        if (null !== $this->documentInfo) {
            $res['documentInfo'] = null !== $this->documentInfo ? $this->documentInfo->toMap() : null;
        }
        if (null !== $this->errorMessage) {
            $res['errorMessage'] = $this->errorMessage;
        }
        if (null !== $this->success) {
            $res['success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddDocumentResult
     */
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
