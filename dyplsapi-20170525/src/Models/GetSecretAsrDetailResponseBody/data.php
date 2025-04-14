<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyplsapi\V20170525\Models\GetSecretAsrDetailResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\GetSecretAsrDetailResponseBody\data\sentences;

class data extends Model
{
    /**
     * @var int
     */
    public $bizDuration;

    /**
     * @var string
     */
    public $businessId;

    /**
     * @var string
     */
    public $businessKey;

    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $msg;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var sentences[]
     */
    public $sentences;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'bizDuration' => 'BizDuration',
        'businessId' => 'BusinessId',
        'businessKey' => 'BusinessKey',
        'code' => 'Code',
        'msg' => 'Msg',
        'requestId' => 'RequestId',
        'sentences' => 'Sentences',
        'type' => 'Type',
    ];

    public function validate()
    {
        if (\is_array($this->sentences)) {
            Model::validateArray($this->sentences);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizDuration) {
            $res['BizDuration'] = $this->bizDuration;
        }

        if (null !== $this->businessId) {
            $res['BusinessId'] = $this->businessId;
        }

        if (null !== $this->businessKey) {
            $res['BusinessKey'] = $this->businessKey;
        }

        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->msg) {
            $res['Msg'] = $this->msg;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->sentences) {
            if (\is_array($this->sentences)) {
                $res['Sentences'] = [];
                $n1 = 0;
                foreach ($this->sentences as $item1) {
                    $res['Sentences'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['BizDuration'])) {
            $model->bizDuration = $map['BizDuration'];
        }

        if (isset($map['BusinessId'])) {
            $model->businessId = $map['BusinessId'];
        }

        if (isset($map['BusinessKey'])) {
            $model->businessKey = $map['BusinessKey'];
        }

        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['Msg'])) {
            $model->msg = $map['Msg'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Sentences'])) {
            if (!empty($map['Sentences'])) {
                $model->sentences = [];
                $n1 = 0;
                foreach ($map['Sentences'] as $item1) {
                    $model->sentences[$n1++] = sentences::fromMap($item1);
                }
            }
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
