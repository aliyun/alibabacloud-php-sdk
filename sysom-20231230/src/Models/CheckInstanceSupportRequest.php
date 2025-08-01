<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SysOM\V20231230\Models;

use AlibabaCloud\Tea\Model;

class CheckInstanceSupportRequest extends Model
{
    /**
     * @example ["i-2zxxxxxx"]
     *
     * @var string[]
     */
    public $instances;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $region;
    protected $_name = [
        'instances' => 'instances',
        'region' => 'region',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->instances) {
            $res['instances'] = $this->instances;
        }
        if (null !== $this->region) {
            $res['region'] = $this->region;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CheckInstanceSupportRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['instances'])) {
            if (!empty($map['instances'])) {
                $model->instances = $map['instances'];
            }
        }
        if (isset($map['region'])) {
            $model->region = $map['region'];
        }

        return $model;
    }
}
