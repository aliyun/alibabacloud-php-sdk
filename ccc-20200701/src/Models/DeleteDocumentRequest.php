<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models;

use AlibabaCloud\Tea\Model;

class DeleteDocumentRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example xxx
     *
     * @var string
     */
    public $documentId;

    /**
     * @description This parameter is required.
     *
     * @example d278629c-c687-4aa3-b044-4fe9b012****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example DE803553-8AA9-4B9D-9E4E-A82BC69EDCEE
     *
     * @var string
     */
    public $requestId;

    /**
     * @description schema id
     *
     * This parameter is required.
     * @example profile
     *
     * @var string
     */
    public $schemaId;
    protected $_name = [
        'documentId' => 'DocumentId',
        'instanceId' => 'InstanceId',
        'requestId'  => 'RequestId',
        'schemaId'   => 'SchemaId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->documentId) {
            $res['DocumentId'] = $this->documentId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->schemaId) {
            $res['SchemaId'] = $this->schemaId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteDocumentRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DocumentId'])) {
            $model->documentId = $map['DocumentId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SchemaId'])) {
            $model->schemaId = $map['SchemaId'];
        }

        return $model;
    }
}
