<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models;

use AlibabaCloud\Tea\Model;

class DeleteDocumentsRequest extends Model
{
    /**
     * @var string[]
     */
    public $documentIds;

    /**
     * @description This parameter is required.
     *
     * @example 9cfad875-6260-4a53-ab6e-b13e3fb31f7d
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example 0630E5DF-CEB0-445B-8626-D5C7481181C3
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
        'documentIds' => 'DocumentIds',
        'instanceId'  => 'InstanceId',
        'requestId'   => 'RequestId',
        'schemaId'    => 'SchemaId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->documentIds) {
            $res['DocumentIds'] = $this->documentIds;
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
     * @return DeleteDocumentsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DocumentIds'])) {
            if (!empty($map['DocumentIds'])) {
                $model->documentIds = $map['DocumentIds'];
            }
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
