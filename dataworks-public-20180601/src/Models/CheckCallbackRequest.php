<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20180601\Models;

use AlibabaCloud\Tea\Model;

class CheckCallbackRequest extends Model
{
    /**
     * @var string
     */
    public $callbackResultString;
    protected $_name = [
        'callbackResultString' => 'CallbackResultString',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->callbackResultString) {
            $res['CallbackResultString'] = $this->callbackResultString;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CheckCallbackRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CallbackResultString'])) {
            $model->callbackResultString = $map['CallbackResultString'];
        }

        return $model;
    }
}
