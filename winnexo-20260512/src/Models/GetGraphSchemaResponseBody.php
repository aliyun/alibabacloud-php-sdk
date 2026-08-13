<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models;

use AlibabaCloud\Dara\Model;

class GetGraphSchemaResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $graphName;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $schemaVersion;

    /**
     * @var string
     */
    public $yamlEdit;
    protected $_name = [
        'code' => 'code',
        'graphName' => 'graphName',
        'message' => 'message',
        'requestId' => 'requestId',
        'schemaVersion' => 'schemaVersion',
        'yamlEdit' => 'yamlEdit',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['code'] = $this->code;
        }

        if (null !== $this->graphName) {
            $res['graphName'] = $this->graphName;
        }

        if (null !== $this->message) {
            $res['message'] = $this->message;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->schemaVersion) {
            $res['schemaVersion'] = $this->schemaVersion;
        }

        if (null !== $this->yamlEdit) {
            $res['yamlEdit'] = $this->yamlEdit;
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
        if (isset($map['code'])) {
            $model->code = $map['code'];
        }

        if (isset($map['graphName'])) {
            $model->graphName = $map['graphName'];
        }

        if (isset($map['message'])) {
            $model->message = $map['message'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['schemaVersion'])) {
            $model->schemaVersion = $map['schemaVersion'];
        }

        if (isset($map['yamlEdit'])) {
            $model->yamlEdit = $map['yamlEdit'];
        }

        return $model;
    }
}
