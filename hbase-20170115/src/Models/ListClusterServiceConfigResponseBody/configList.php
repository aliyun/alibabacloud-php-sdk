<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20170115\Models\ListClusterServiceConfigResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\HBase\V20170115\Models\ListClusterServiceConfigResponseBody\configList\config;

class configList extends Model
{
    /**
     * @var config[]
     */
    public $config;
    protected $_name = [
        'config' => 'Config',
    ];

    public function validate()
    {
        if (\is_array($this->config)) {
            Model::validateArray($this->config);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->config) {
            if (\is_array($this->config)) {
                $res['Config'] = [];
                $n1 = 0;
                foreach ($this->config as $item1) {
                    $res['Config'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Config'])) {
            if (!empty($map['Config'])) {
                $model->config = [];
                $n1 = 0;
                foreach ($map['Config'] as $item1) {
                    $model->config[$n1] = config::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
