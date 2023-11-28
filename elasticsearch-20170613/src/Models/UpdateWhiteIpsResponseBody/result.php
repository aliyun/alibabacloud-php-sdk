<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UpdateWhiteIpsResponseBody;

use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UpdateWhiteIpsResponseBody\result\networkConfig;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description The list of whitelists.
     *
     * @var string[]
     */
    public $esIPWhitelist;

    /**
     * @description The name of the whitelist. By default, the default whitelist is included.
     *
     * @var networkConfig
     */
    public $networkConfig;
    protected $_name = [
        'esIPWhitelist' => 'esIPWhitelist',
        'networkConfig' => 'networkConfig',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->esIPWhitelist) {
            $res['esIPWhitelist'] = $this->esIPWhitelist;
        }
        if (null !== $this->networkConfig) {
            $res['networkConfig'] = null !== $this->networkConfig ? $this->networkConfig->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['esIPWhitelist'])) {
            if (!empty($map['esIPWhitelist'])) {
                $model->esIPWhitelist = $map['esIPWhitelist'];
            }
        }
        if (isset($map['networkConfig'])) {
            $model->networkConfig = networkConfig::fromMap($map['networkConfig']);
        }

        return $model;
    }
}
