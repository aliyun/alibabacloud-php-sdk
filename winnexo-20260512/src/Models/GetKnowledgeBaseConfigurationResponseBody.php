<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models;

use AlibabaCloud\Dara\Model;

class GetKnowledgeBaseConfigurationResponseBody extends Model
{
    /**
     * @var bool
     */
    public $changeRecordEnabled;

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
    public $message;

    /**
     * @var string
     */
    public $ooVisibilityMode;

    /**
     * @var string[]
     */
    public $operatingObjectNames;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'changeRecordEnabled' => 'changeRecordEnabled',
        'code' => 'code',
        'directoryId' => 'directoryId',
        'message' => 'message',
        'ooVisibilityMode' => 'ooVisibilityMode',
        'operatingObjectNames' => 'operatingObjectNames',
        'requestId' => 'requestId',
    ];

    public function validate()
    {
        if (\is_array($this->operatingObjectNames)) {
            Model::validateArray($this->operatingObjectNames);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->changeRecordEnabled) {
            $res['changeRecordEnabled'] = $this->changeRecordEnabled;
        }

        if (null !== $this->code) {
            $res['code'] = $this->code;
        }

        if (null !== $this->directoryId) {
            $res['directoryId'] = $this->directoryId;
        }

        if (null !== $this->message) {
            $res['message'] = $this->message;
        }

        if (null !== $this->ooVisibilityMode) {
            $res['ooVisibilityMode'] = $this->ooVisibilityMode;
        }

        if (null !== $this->operatingObjectNames) {
            if (\is_array($this->operatingObjectNames)) {
                $res['operatingObjectNames'] = [];
                $n1 = 0;
                foreach ($this->operatingObjectNames as $item1) {
                    $res['operatingObjectNames'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
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
        if (isset($map['changeRecordEnabled'])) {
            $model->changeRecordEnabled = $map['changeRecordEnabled'];
        }

        if (isset($map['code'])) {
            $model->code = $map['code'];
        }

        if (isset($map['directoryId'])) {
            $model->directoryId = $map['directoryId'];
        }

        if (isset($map['message'])) {
            $model->message = $map['message'];
        }

        if (isset($map['ooVisibilityMode'])) {
            $model->ooVisibilityMode = $map['ooVisibilityMode'];
        }

        if (isset($map['operatingObjectNames'])) {
            if (!empty($map['operatingObjectNames'])) {
                $model->operatingObjectNames = [];
                $n1 = 0;
                foreach ($map['operatingObjectNames'] as $item1) {
                    $model->operatingObjectNames[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
