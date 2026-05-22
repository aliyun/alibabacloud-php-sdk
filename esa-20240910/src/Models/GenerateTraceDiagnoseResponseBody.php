<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;

class GenerateTraceDiagnoseResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $tip;

    /**
     * @var string
     */
    public $url;
    protected $_name = [
        'requestId' => 'RequestId',
        'tip' => 'Tip',
        'url' => 'Url',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->tip) {
            $res['Tip'] = $this->tip;
        }

        if (null !== $this->url) {
            $res['Url'] = $this->url;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Tip'])) {
            $model->tip = $map['Tip'];
        }

        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
