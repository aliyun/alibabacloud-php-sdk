<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UpdateKibanaWhiteIpsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UpdateKibanaWhiteIpsResponseBody\result\networkConfig;

class result extends Model
{
    /**
     * @var string[]
     */
    public $kibanaIPWhitelist;

    /**
     * @var string[]
     */
    public $kibanaPrivateIPWhitelist;

    /**
     * @var networkConfig
     */
    public $networkConfig;
    protected $_name = [
        'kibanaIPWhitelist' => 'kibanaIPWhitelist',
        'kibanaPrivateIPWhitelist' => 'kibanaPrivateIPWhitelist',
        'networkConfig' => 'networkConfig',
    ];

    public function validate()
    {
        if (\is_array($this->kibanaIPWhitelist)) {
            Model::validateArray($this->kibanaIPWhitelist);
        }
        if (\is_array($this->kibanaPrivateIPWhitelist)) {
            Model::validateArray($this->kibanaPrivateIPWhitelist);
        }
        if (null !== $this->networkConfig) {
            $this->networkConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->kibanaIPWhitelist) {
            if (\is_array($this->kibanaIPWhitelist)) {
                $res['kibanaIPWhitelist'] = [];
                $n1 = 0;
                foreach ($this->kibanaIPWhitelist as $item1) {
                    $res['kibanaIPWhitelist'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->kibanaPrivateIPWhitelist) {
            if (\is_array($this->kibanaPrivateIPWhitelist)) {
                $res['kibanaPrivateIPWhitelist'] = [];
                $n1 = 0;
                foreach ($this->kibanaPrivateIPWhitelist as $item1) {
                    $res['kibanaPrivateIPWhitelist'][$n1] = $item1;
                    ++$n1;
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
        if (isset($map['kibanaIPWhitelist'])) {
            if (!empty($map['kibanaIPWhitelist'])) {
                $model->kibanaIPWhitelist = [];
                $n1 = 0;
                foreach ($map['kibanaIPWhitelist'] as $item1) {
                    $model->kibanaIPWhitelist[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['kibanaPrivateIPWhitelist'])) {
            if (!empty($map['kibanaPrivateIPWhitelist'])) {
                $model->kibanaPrivateIPWhitelist = [];
                $n1 = 0;
                foreach ($map['kibanaPrivateIPWhitelist'] as $item1) {
                    $model->kibanaPrivateIPWhitelist[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['networkConfig'])) {
            $model->networkConfig = networkConfig::fromMap($map['networkConfig']);
        }

        return $model;
    }
}
