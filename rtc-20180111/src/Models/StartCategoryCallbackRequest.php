<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models;

use AlibabaCloud\SDK\Rtc\V20180111\Models\StartCategoryCallbackRequest\callback;
use AlibabaCloud\Tea\Model;

class StartCategoryCallbackRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 223***JQb
     *
     * @var string
     */
    public $appId;

    /**
     * @description This parameter is required.
     *
     * @var callable
     */
    public $callback;
    protected $_name = [
        'appId' => 'AppId',
        'callback' => 'Callback',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->callback) {
            $res['Callback'] = null !== $this->callback ? $this->callback->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StartCategoryCallbackRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['Callback'])) {
            $model->callback = callback::fromMap($map['Callback']);
        }

        return $model;
    }
}
