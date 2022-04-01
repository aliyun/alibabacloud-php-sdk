<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FCOpen\V20210406\Models;

use AlibabaCloud\Tea\Model;

class AsyncConfigMeta extends Model
{
    /**
     * @description 异步配置所属函数名称。
     *
     * @var string
     */
    public $functionName;

    /**
     * @description 异步配置所属服务版本/别名。
     *
     * @var string
     */
    public $qualifier;

    /**
     * @description 异步配置所属服务名称。
     *
     * @var string
     */
    public $serviceName;
    protected $_name = [
        'functionName' => 'functionName',
        'qualifier'    => 'qualifier',
        'serviceName'  => 'serviceName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->functionName) {
            $res['functionName'] = $this->functionName;
        }
        if (null !== $this->qualifier) {
            $res['qualifier'] = $this->qualifier;
        }
        if (null !== $this->serviceName) {
            $res['serviceName'] = $this->serviceName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AsyncConfigMeta
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['functionName'])) {
            $model->functionName = $map['functionName'];
        }
        if (isset($map['qualifier'])) {
            $model->qualifier = $map['qualifier'];
        }
        if (isset($map['serviceName'])) {
            $model->serviceName = $map['serviceName'];
        }

        return $model;
    }
}
