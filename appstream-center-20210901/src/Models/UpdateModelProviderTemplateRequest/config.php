<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\UpdateModelProviderTemplateRequest;

use AlibabaCloud\Dara\Model;

class config extends Model
{
    /**
     * @var string
     */
    public $apiKey;

    /**
     * @var string
     */
    public $apiType;

    /**
     * @var string
     */
    public $baseUrl;
    protected $_name = [
        'apiKey' => 'ApiKey',
        'apiType' => 'ApiType',
        'baseUrl' => 'BaseUrl',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiKey) {
            $res['ApiKey'] = $this->apiKey;
        }

        if (null !== $this->apiType) {
            $res['ApiType'] = $this->apiType;
        }

        if (null !== $this->baseUrl) {
            $res['BaseUrl'] = $this->baseUrl;
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

        if (isset($map['ApiType'])) {
            $model->apiType = $map['ApiType'];
        }

        if (isset($map['BaseUrl'])) {
            $model->baseUrl = $map['BaseUrl'];
        }

        return $model;
    }
}
