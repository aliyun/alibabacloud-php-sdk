<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\AgentServiceConfig;

use AlibabaCloud\Tea\Model;

class difyConfig extends Model
{
    /**
     * @var string
     */
    public $apiKey;

    /**
     * @var string
     */
    public $botType;
    protected $_name = [
        'apiKey' => 'apiKey',
        'botType' => 'botType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiKey) {
            $res['apiKey'] = $this->apiKey;
        }
        if (null !== $this->botType) {
            $res['botType'] = $this->botType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return difyConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['apiKey'])) {
            $model->apiKey = $map['apiKey'];
        }
        if (isset($map['botType'])) {
            $model->botType = $map['botType'];
        }

        return $model;
    }
}
