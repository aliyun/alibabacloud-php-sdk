<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebPlus\V20190320\Models\DescribeAppEnvsResponseBody;

use AlibabaCloud\SDK\WebPlus\V20190320\Models\DescribeAppEnvsResponseBody\appEnvs\appEnv;
use AlibabaCloud\Tea\Model;

class appEnvs extends Model
{
    /**
     * @var appEnv[]
     */
    public $appEnv;
    protected $_name = [
        'appEnv' => 'AppEnv',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appEnv) {
            $res['AppEnv'] = [];
            if (null !== $this->appEnv && \is_array($this->appEnv)) {
                $n = 0;
                foreach ($this->appEnv as $item) {
                    $res['AppEnv'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return appEnvs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppEnv'])) {
            if (!empty($map['AppEnv'])) {
                $model->appEnv = [];
                $n             = 0;
                foreach ($map['AppEnv'] as $item) {
                    $model->appEnv[$n++] = null !== $item ? appEnv::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
