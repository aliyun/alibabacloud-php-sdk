<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models\ListUserCustomLogConfigResponseBody;

use AlibabaCloud\Tea\Model;

class configIds extends Model
{
    /**
     * @var string[]
     */
    public $configId;
    protected $_name = [
        'configId' => 'ConfigId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configId) {
            $res['ConfigId'] = $this->configId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return configIds
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfigId'])) {
            if (!empty($map['ConfigId'])) {
                $model->configId = $map['ConfigId'];
            }
        }

        return $model;
    }
}
