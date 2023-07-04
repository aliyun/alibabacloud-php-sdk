<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20230516\Models\AgentCancelCallResponseBody;

use AlibabaCloud\Tea\Model;

class model_ extends Model
{
    /**
     * @description 错误手机列表
     *
     * @var string[]
     */
    public $unHandleNumbers;
    protected $_name = [
        'unHandleNumbers' => 'UnHandleNumbers',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->unHandleNumbers) {
            $res['UnHandleNumbers'] = $this->unHandleNumbers;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return model_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UnHandleNumbers'])) {
            if (!empty($map['UnHandleNumbers'])) {
                $model->unHandleNumbers = $map['UnHandleNumbers'];
            }
        }

        return $model;
    }
}
