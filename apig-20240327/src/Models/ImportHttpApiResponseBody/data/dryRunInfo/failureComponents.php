<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\ImportHttpApiResponseBody\data\dryRunInfo;

use AlibabaCloud\Tea\Model;

class failureComponents extends Model
{
    /**
     * @description Error message.
     *
     * @example 数据结构定义有误。
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @description 数据结构名称。
     *
     * @example orderDTO
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'errorMessage' => 'errorMessage',
        'name' => 'name',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->errorMessage) {
            $res['errorMessage'] = $this->errorMessage;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return failureComponents
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['errorMessage'])) {
            $model->errorMessage = $map['errorMessage'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        return $model;
    }
}
