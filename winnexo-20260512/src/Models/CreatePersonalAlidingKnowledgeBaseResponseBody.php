<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models;

use AlibabaCloud\Dara\Model;

class CreatePersonalAlidingKnowledgeBaseResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $directoryId;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $kbUrl;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $operatingObjectName;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'code' => 'code',
        'directoryId' => 'directoryId',
        'gmtCreate' => 'gmtCreate',
        'kbUrl' => 'kbUrl',
        'message' => 'message',
        'name' => 'name',
        'operatingObjectName' => 'operatingObjectName',
        'requestId' => 'requestId',
        'status' => 'status',
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

        if (null !== $this->directoryId) {
            $res['directoryId'] = $this->directoryId;
        }

        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->kbUrl) {
            $res['kbUrl'] = $this->kbUrl;
        }

        if (null !== $this->message) {
            $res['message'] = $this->message;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->operatingObjectName) {
            $res['operatingObjectName'] = $this->operatingObjectName;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
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

        if (isset($map['directoryId'])) {
            $model->directoryId = $map['directoryId'];
        }

        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }

        if (isset($map['kbUrl'])) {
            $model->kbUrl = $map['kbUrl'];
        }

        if (isset($map['message'])) {
            $model->message = $map['message'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['operatingObjectName'])) {
            $model->operatingObjectName = $map['operatingObjectName'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}
