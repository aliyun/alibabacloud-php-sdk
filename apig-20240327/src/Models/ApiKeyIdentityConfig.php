<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\SDK\APIG\V20240327\Models\ApiKeyIdentityConfig\apikeySource;
use AlibabaCloud\Tea\Model;

class ApiKeyIdentityConfig extends Model
{
    /**
     * @var string
     */
    public $apikey;

    /**
     * @var apikeySource
     */
    public $apikeySource;

    /**
     * @var string
     */
    public $generateMode;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'apikey'       => 'apikey',
        'apikeySource' => 'apikeySource',
        'generateMode' => 'generateMode',
        'type'         => 'type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apikey) {
            $res['apikey'] = $this->apikey;
        }
        if (null !== $this->apikeySource) {
            $res['apikeySource'] = null !== $this->apikeySource ? $this->apikeySource->toMap() : null;
        }
        if (null !== $this->generateMode) {
            $res['generateMode'] = $this->generateMode;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ApiKeyIdentityConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['apikey'])) {
            $model->apikey = $map['apikey'];
        }
        if (isset($map['apikeySource'])) {
            $model->apikeySource = apikeySource::fromMap($map['apikeySource']);
        }
        if (isset($map['generateMode'])) {
            $model->generateMode = $map['generateMode'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
