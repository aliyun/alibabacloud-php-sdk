<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models;

use AlibabaCloud\Tea\Model;

class ImportDocumentsRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example b0eb2742-f37e-4c67-82d4-25c651c1c450
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description This parameter is required.
     *
     * @example ccc-test/test-file.wav
     *
     * @var string
     */
    public $ossFileKey;

    /**
     * @example 7BEEA660-A45A-45E3-98CC-AFC65E715C23
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
        'instanceId' => 'InstanceId',
        'ossFileKey' => 'OssFileKey',
        'requestId'  => 'RequestId',
        'schemaId'   => 'SchemaId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->ossFileKey) {
            $res['OssFileKey'] = $this->ossFileKey;
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
     * @return ImportDocumentsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['OssFileKey'])) {
            $model->ossFileKey = $map['OssFileKey'];
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
