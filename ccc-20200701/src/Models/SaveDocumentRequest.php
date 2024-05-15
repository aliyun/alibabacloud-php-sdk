<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models;

use AlibabaCloud\Tea\Model;

class SaveDocumentRequest extends Model
{
    /**
     * @example xxx
     *
     * @var string
     */
    public $documentId;

    /**
     * @description This parameter is required.
     *
     * @example {"name":"tom"}
     *
     * @var string
     */
    public $documentJson;

    /**
     * @description This parameter is required.
     *
     * @example 9cfad875-6260-4a53-ab6e-b13e3fb31f7d
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example EAF3C248-E123-441B-A545-B6CD02E98EED
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
        'documentId'   => 'DocumentId',
        'documentJson' => 'DocumentJson',
        'instanceId'   => 'InstanceId',
        'requestId'    => 'RequestId',
        'schemaId'     => 'SchemaId',
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
        if (null !== $this->documentJson) {
            $res['DocumentJson'] = $this->documentJson;
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
     * @return SaveDocumentRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DocumentId'])) {
            $model->documentId = $map['DocumentId'];
        }
        if (isset($map['DocumentJson'])) {
            $model->documentJson = $map['DocumentJson'];
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
