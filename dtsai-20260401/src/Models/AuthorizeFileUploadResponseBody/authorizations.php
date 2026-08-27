<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DtsAI\V20260401\Models\AuthorizeFileUploadResponseBody;

use AlibabaCloud\Dara\Model;

class authorizations extends Model
{
    /**
     * @var string
     */
    public $encodedPolicy;

    /**
     * @var string
     */
    public $objectKey;

    /**
     * @var string
     */
    public $signature;
    protected $_name = [
        'encodedPolicy' => 'EncodedPolicy',
        'objectKey' => 'ObjectKey',
        'signature' => 'Signature',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->encodedPolicy) {
            $res['EncodedPolicy'] = $this->encodedPolicy;
        }

        if (null !== $this->objectKey) {
            $res['ObjectKey'] = $this->objectKey;
        }

        if (null !== $this->signature) {
            $res['Signature'] = $this->signature;
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
        if (isset($map['EncodedPolicy'])) {
            $model->encodedPolicy = $map['EncodedPolicy'];
        }

        if (isset($map['ObjectKey'])) {
            $model->objectKey = $map['ObjectKey'];
        }

        if (isset($map['Signature'])) {
            $model->signature = $map['Signature'];
        }

        return $model;
    }
}
