<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListProjectsResponseBody\data\projects\properties;

use AlibabaCloud\Tea\Model;

class encryption extends Model
{
    /**
     * @example SHA1
     *
     * @var string
     */
    public $algorithm;

    /**
     * @example true
     *
     * @var bool
     */
    public $enable;

    /**
     * @example dafault
     *
     * @var string
     */
    public $key;
    protected $_name = [
        'algorithm' => 'algorithm',
        'enable'    => 'enable',
        'key'       => 'key',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->algorithm) {
            $res['algorithm'] = $this->algorithm;
        }
        if (null !== $this->enable) {
            $res['enable'] = $this->enable;
        }
        if (null !== $this->key) {
            $res['key'] = $this->key;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return encryption
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['algorithm'])) {
            $model->algorithm = $map['algorithm'];
        }
        if (isset($map['enable'])) {
            $model->enable = $map['enable'];
        }
        if (isset($map['key'])) {
            $model->key = $map['key'];
        }

        return $model;
    }
}
