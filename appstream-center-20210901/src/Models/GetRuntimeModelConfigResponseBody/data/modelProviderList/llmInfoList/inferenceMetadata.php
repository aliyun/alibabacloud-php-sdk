<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\GetRuntimeModelConfigResponseBody\data\modelProviderList\llmInfoList;

use AlibabaCloud\Dara\Model;

class inferenceMetadata extends Model
{
    /**
     * @var string[]
     */
    public $requestModality;

    /**
     * @var string[]
     */
    public $responseModality;
    protected $_name = [
        'requestModality' => 'RequestModality',
        'responseModality' => 'ResponseModality',
    ];

    public function validate()
    {
        if (\is_array($this->requestModality)) {
            Model::validateArray($this->requestModality);
        }
        if (\is_array($this->responseModality)) {
            Model::validateArray($this->responseModality);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestModality) {
            if (\is_array($this->requestModality)) {
                $res['RequestModality'] = [];
                $n1 = 0;
                foreach ($this->requestModality as $item1) {
                    $res['RequestModality'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->responseModality) {
            if (\is_array($this->responseModality)) {
                $res['ResponseModality'] = [];
                $n1 = 0;
                foreach ($this->responseModality as $item1) {
                    $res['ResponseModality'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['RequestModality'])) {
            if (!empty($map['RequestModality'])) {
                $model->requestModality = [];
                $n1 = 0;
                foreach ($map['RequestModality'] as $item1) {
                    $model->requestModality[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ResponseModality'])) {
            if (!empty($map['ResponseModality'])) {
                $model->responseModality = [];
                $n1 = 0;
                foreach ($map['ResponseModality'] as $item1) {
                    $model->responseModality[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
