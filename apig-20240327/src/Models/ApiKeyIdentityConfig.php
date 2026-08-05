<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\APIG\V20240327\Models\ApiKeyIdentityConfig\apikeySource;
use AlibabaCloud\SDK\APIG\V20240327\Models\ApiKeyIdentityConfig\apikeySources;
use AlibabaCloud\SDK\APIG\V20240327\Models\ApiKeyIdentityConfig\credentials;

class ApiKeyIdentityConfig extends Model
{
    /**
     * @var apikeySource
     */
    public $apikeySource;

    /**
     * @var apikeySources[]
     */
    public $apikeySources;

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
        'apikeySources' => 'apikeySources',
        'credentials' => 'credentials',
        'type' => 'type',
    ];

    public function validate()
    {
        if (null !== $this->apikeySource) {
            $this->apikeySource->validate();
        }
        if (\is_array($this->apikeySources)) {
            Model::validateArray($this->apikeySources);
        }
        if (\is_array($this->credentials)) {
            Model::validateArray($this->credentials);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apikeySource) {
            $res['apikeySource'] = null !== $this->apikeySource ? $this->apikeySource->toArray($noStream) : $this->apikeySource;
        }

        if (null !== $this->apikeySources) {
            if (\is_array($this->apikeySources)) {
                $res['apikeySources'] = [];
                $n1 = 0;
                foreach ($this->apikeySources as $item1) {
                    $res['apikeySources'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->credentials) {
            if (\is_array($this->credentials)) {
                $res['credentials'] = [];
                $n1 = 0;
                foreach ($this->credentials as $item1) {
                    $res['credentials'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
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
        if (isset($map['apikeySource'])) {
            $model->apikeySource = apikeySource::fromMap($map['apikeySource']);
        }

        if (isset($map['apikeySources'])) {
            if (!empty($map['apikeySources'])) {
                $model->apikeySources = [];
                $n1 = 0;
                foreach ($map['apikeySources'] as $item1) {
                    $model->apikeySources[$n1] = apikeySources::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['credentials'])) {
            if (!empty($map['credentials'])) {
                $model->credentials = [];
                $n1 = 0;
                foreach ($map['credentials'] as $item1) {
                    $model->credentials[$n1] = credentials::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
