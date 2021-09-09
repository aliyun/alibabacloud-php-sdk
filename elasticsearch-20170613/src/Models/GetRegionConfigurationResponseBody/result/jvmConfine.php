<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\GetRegionConfigurationResponseBody\result;

use AlibabaCloud\Tea\Model;

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
        'memory'            => 'memory',
        'supportEsVersions' => 'supportEsVersions',
        'supportGcs'        => 'supportGcs',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->memory) {
            $res['memory'] = $this->memory;
        }
        if (null !== $this->supportEsVersions) {
            $res['supportEsVersions'] = $this->supportEsVersions;
        }
        if (null !== $this->supportGcs) {
            $res['supportGcs'] = $this->supportGcs;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return jvmConfine
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['memory'])) {
            $model->memory = $map['memory'];
        }
        if (isset($map['supportEsVersions'])) {
            if (!empty($map['supportEsVersions'])) {
                $model->supportEsVersions = $map['supportEsVersions'];
            }
        }
        if (isset($map['supportGcs'])) {
            if (!empty($map['supportGcs'])) {
                $model->supportGcs = $map['supportGcs'];
            }
        }

        return $model;
    }
}
