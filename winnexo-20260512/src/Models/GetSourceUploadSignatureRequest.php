<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models;

use AlibabaCloud\Dara\Model;

class GetSourceUploadSignatureRequest extends Model
{
    /**
     * @var string
     */
    public $contentType;

    /**
     * @var int
     */
    public $expires;

    /**
     * @var string
     */
    public $filename;

    /**
     * @var string
     */
    public $operatingObjectName;

    /**
     * @var string
     */
    public $scope;

    /**
     * @var string
     */
    public $tenantId;
    protected $_name = [
        'contentType' => 'contentType',
        'expires' => 'expires',
        'filename' => 'filename',
        'operatingObjectName' => 'operatingObjectName',
        'scope' => 'scope',
        'tenantId' => 'tenantId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->contentType) {
            $res['contentType'] = $this->contentType;
        }

        if (null !== $this->expires) {
            $res['expires'] = $this->expires;
        }

        if (null !== $this->filename) {
            $res['filename'] = $this->filename;
        }

        if (null !== $this->operatingObjectName) {
            $res['operatingObjectName'] = $this->operatingObjectName;
        }

        if (null !== $this->scope) {
            $res['scope'] = $this->scope;
        }

        if (null !== $this->tenantId) {
            $res['tenantId'] = $this->tenantId;
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
        if (isset($map['contentType'])) {
            $model->contentType = $map['contentType'];
        }

        if (isset($map['expires'])) {
            $model->expires = $map['expires'];
        }

        if (isset($map['filename'])) {
            $model->filename = $map['filename'];
        }

        if (isset($map['operatingObjectName'])) {
            $model->operatingObjectName = $map['operatingObjectName'];
        }

        if (isset($map['scope'])) {
            $model->scope = $map['scope'];
        }

        if (isset($map['tenantId'])) {
            $model->tenantId = $map['tenantId'];
        }

        return $model;
    }
}
