<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RdsAi\V20250507\Models\ResetApiKeyResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\ResetApiKeyResponseBody\data\customKeyList;

class data extends Model
{
    /**
     * @var string
     */
    public $apiKey;

    /**
     * @var string
     */
    public $baseUrl;

    /**
     * @var customKeyList[]
     */
    public $customKeyList;
    protected $_name = [
        'apiKey' => 'ApiKey',
        'baseUrl' => 'BaseUrl',
        'customKeyList' => 'CustomKeyList',
    ];

    public function validate()
    {
        if (\is_array($this->customKeyList)) {
            Model::validateArray($this->customKeyList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiKey) {
            $res['ApiKey'] = $this->apiKey;
        }

        if (null !== $this->baseUrl) {
            $res['BaseUrl'] = $this->baseUrl;
        }

        if (null !== $this->customKeyList) {
            if (\is_array($this->customKeyList)) {
                $res['CustomKeyList'] = [];
                $n1 = 0;
                foreach ($this->customKeyList as $item1) {
                    $res['CustomKeyList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ApiKey'])) {
            $model->apiKey = $map['ApiKey'];
        }

        if (isset($map['BaseUrl'])) {
            $model->baseUrl = $map['BaseUrl'];
        }

        if (isset($map['CustomKeyList'])) {
            if (!empty($map['CustomKeyList'])) {
                $model->customKeyList = [];
                $n1 = 0;
                foreach ($map['CustomKeyList'] as $item1) {
                    $model->customKeyList[$n1] = customKeyList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
