<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\GetRegionConfigurationResponseBody\result;

use AlibabaCloud\Dara\Model;

class jvmConfine extends Model
{
    /**
     * @var int
     */
    public $memory;

    /**
     * @var string[]
     */
    public $supportEsVersions;

    /**
     * @var string[]
     */
    public $supportGcs;
    protected $_name = [
        'memory' => 'memory',
        'supportEsVersions' => 'supportEsVersions',
        'supportGcs' => 'supportGcs',
    ];

    public function validate()
    {
        if (\is_array($this->supportEsVersions)) {
            Model::validateArray($this->supportEsVersions);
        }
        if (\is_array($this->supportGcs)) {
            Model::validateArray($this->supportGcs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->memory) {
            $res['memory'] = $this->memory;
        }

        if (null !== $this->supportEsVersions) {
            if (\is_array($this->supportEsVersions)) {
                $res['supportEsVersions'] = [];
                $n1 = 0;
                foreach ($this->supportEsVersions as $item1) {
                    $res['supportEsVersions'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->supportGcs) {
            if (\is_array($this->supportGcs)) {
                $res['supportGcs'] = [];
                $n1 = 0;
                foreach ($this->supportGcs as $item1) {
                    $res['supportGcs'][$n1++] = $item1;
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
        if (isset($map['memory'])) {
            $model->memory = $map['memory'];
        }

        if (isset($map['supportEsVersions'])) {
            if (!empty($map['supportEsVersions'])) {
                $model->supportEsVersions = [];
                $n1 = 0;
                foreach ($map['supportEsVersions'] as $item1) {
                    $model->supportEsVersions[$n1++] = $item1;
                }
            }
        }

        if (isset($map['supportGcs'])) {
            if (!empty($map['supportGcs'])) {
                $model->supportGcs = [];
                $n1 = 0;
                foreach ($map['supportGcs'] as $item1) {
                    $model->supportGcs[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
