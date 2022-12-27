<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeUserConfigsResponseBody\configs;

use AlibabaCloud\Tea\Model;

class ossLogConfig extends Model
{
    /**
     * @example Buckettest
     *
     * @var string
     */
    public $bucket;

    /**
     * @example off
     *
     * @var string
     */
    public $enable;

    /**
     * @example test
     *
     * @var string
     */
    public $prefix;
    protected $_name = [
        'bucket' => 'Bucket',
        'enable' => 'Enable',
        'prefix' => 'Prefix',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bucket) {
            $res['Bucket'] = $this->bucket;
        }
        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
        }
        if (null !== $this->prefix) {
            $res['Prefix'] = $this->prefix;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ossLogConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Bucket'])) {
            $model->bucket = $map['Bucket'];
        }
        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }
        if (isset($map['Prefix'])) {
            $model->prefix = $map['Prefix'];
        }

        return $model;
    }
}
