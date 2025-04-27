<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UpdateWhiteIpsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UpdateWhiteIpsResponseBody\result\networkConfig;

class result extends Model
{
    /**
     * @var string[]
     */
    public $esIPWhitelist;

    /**
     * @var networkConfig
     */
    public $networkConfig;
    protected $_name = [
        'esIPWhitelist' => 'esIPWhitelist',
        'networkConfig' => 'networkConfig',
    ];

    public function validate()
    {
        if (\is_array($this->esIPWhitelist)) {
            Model::validateArray($this->esIPWhitelist);
        }
        if (null !== $this->networkConfig) {
            $this->networkConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->esIPWhitelist) {
            if (\is_array($this->esIPWhitelist)) {
                $res['esIPWhitelist'] = [];
                $n1 = 0;
                foreach ($this->esIPWhitelist as $item1) {
                    $res['esIPWhitelist'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->networkConfig) {
            $res['networkConfig'] = null !== $this->networkConfig ? $this->networkConfig->toArray($noStream) : $this->networkConfig;
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
        if (isset($map['esIPWhitelist'])) {
            if (!empty($map['esIPWhitelist'])) {
                $model->esIPWhitelist = [];
                $n1 = 0;
                foreach ($map['esIPWhitelist'] as $item1) {
                    $model->esIPWhitelist[$n1++] = $item1;
                }
            }
        }

        if (isset($map['networkConfig'])) {
            $model->networkConfig = networkConfig::fromMap($map['networkConfig']);
        }

        return $model;
    }
}
