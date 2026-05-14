<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\APIG\V20240327\Models\HiMarketApiKeyConfig\credentials;

class HiMarketApiKeyConfig extends Model
{
    /**
     * @var credentials[]
     */
    public $credentials;

    /**
     * @var string
     */
    public $key;

    /**
     * @var string
     */
    public $source;
    protected $_name = [
        'credentials' => 'credentials',
        'key' => 'key',
        'source' => 'source',
    ];

    public function validate()
    {
        if (\is_array($this->credentials)) {
            Model::validateArray($this->credentials);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
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

        if (null !== $this->key) {
            $res['key'] = $this->key;
        }

        if (null !== $this->source) {
            $res['source'] = $this->source;
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

        if (isset($map['key'])) {
            $model->key = $map['key'];
        }

        if (isset($map['source'])) {
            $model->source = $map['source'];
        }

        return $model;
    }
}
