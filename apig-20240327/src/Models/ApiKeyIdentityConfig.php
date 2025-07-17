<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\SDK\APIG\V20240327\Models\ApiKeyIdentityConfig\apikeySource;
use AlibabaCloud\SDK\APIG\V20240327\Models\ApiKeyIdentityConfig\credentials;
use AlibabaCloud\Tea\Model;

class ApiKeyIdentityConfig extends Model
{
    /**
     * @var apikeySource
     */
    public $apikeySource;

    /**
     * @var credentials[]
     */
    public $credentials;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'apikeySource' => 'apikeySource',
        'credentials' => 'credentials',
        'type' => 'type',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->apikeySource) {
            $res['apikeySource'] = null !== $this->apikeySource ? $this->apikeySource->toMap() : null;
        }
        if (null !== $this->credentials) {
            $res['credentials'] = [];
            if (null !== $this->credentials && \is_array($this->credentials)) {
                $n = 0;
                foreach ($this->credentials as $item) {
                    $res['credentials'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['apikeySource'])) {
            $model->apikeySource = apikeySource::fromMap($map['apikeySource']);
        }
        if (isset($map['credentials'])) {
            if (!empty($map['credentials'])) {
                $model->credentials = [];
                $n = 0;
                foreach ($map['credentials'] as $item) {
                    $model->credentials[$n++] = null !== $item ? credentials::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
