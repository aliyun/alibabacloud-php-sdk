<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\HiMarketMcpConfig;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\APIG\V20240327\Models\HiMarketDomain;

class mcpServerConfig extends Model
{
    /**
     * @var HiMarketDomain[]
     */
    public $domains;

    /**
     * @var string
     */
    public $path;
    protected $_name = [
        'domains' => 'domains',
        'path' => 'path',
    ];

    public function validate()
    {
        if (\is_array($this->domains)) {
            Model::validateArray($this->domains);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->domains) {
            if (\is_array($this->domains)) {
                $res['domains'] = [];
                $n1 = 0;
                foreach ($this->domains as $item1) {
                    $res['domains'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->path) {
            $res['path'] = $this->path;
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
        if (isset($map['domains'])) {
            if (!empty($map['domains'])) {
                $model->domains = [];
                $n1 = 0;
                foreach ($map['domains'] as $item1) {
                    $model->domains[$n1] = HiMarketDomain::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['path'])) {
            $model->path = $map['path'];
        }

        return $model;
    }
}
