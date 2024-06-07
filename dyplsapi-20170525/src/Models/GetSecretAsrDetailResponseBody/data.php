<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyplsapi\V20170525\Models\GetSecretAsrDetailResponseBody;

use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\GetSecretAsrDetailResponseBody\data\sentences;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The total duration of the audio file that was recognized. Unit: milliseconds.
     *
     * @example 10944
     *
     * @var int
     */
    public $bizDuration;

    /**
     * @description The ID of the business process.
     *
     * @example 435ee78c7a019650@!FC100000074672458@!2020061522****
     *
     * @var string
     */
    public $businessId;

    /**
     * @description The business keyword.
     *
     * @example JCGTncltuNao****
     *
     * @var string
     */
    public $businessKey;

    /**
     * @description The status code. The status code 21050000 indicates that the request was successful.
     *
     * @example 21050000
     *
     * @var string
     */
    public $code;

    /**
     * @description The description.
     *
     * @example SUCCESS
     *
     * @var string
     */
    public $msg;

    /**
     * @description The request ID.
     *
     * @example 8d2329d407a83447a83be441681f4872ac74nE
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The ASR result.
     *
     * @var sentences[]
     */
    public $sentences;

    /**
     * @description The type.
     *
     * @example asrResult
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'bizDuration' => 'BizDuration',
        'businessId'  => 'BusinessId',
        'businessKey' => 'BusinessKey',
        'code'        => 'Code',
        'msg'         => 'Msg',
        'requestId'   => 'RequestId',
        'sentences'   => 'Sentences',
        'type'        => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['Sentences'] = [];
            if (null !== $this->sentences && \is_array($this->sentences)) {
                $n = 0;
                foreach ($this->sentences as $item) {
                    $res['Sentences'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
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
                $n                = 0;
                foreach ($map['Sentences'] as $item) {
                    $model->sentences[$n++] = null !== $item ? sentences::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
