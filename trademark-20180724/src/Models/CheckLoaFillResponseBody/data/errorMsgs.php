<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models\CheckLoaFillResponseBody\data;

use AlibabaCloud\Tea\Model;

class errorMsgs extends Model
{
    /**
     * @var string[]
     */
    public $errorMsg;
    protected $_name = [
        'errorMsg' => 'ErrorMsg',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->errorMsg) {
            $res['ErrorMsg'] = $this->errorMsg;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return errorMsgs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ErrorMsg'])) {
            if (!empty($map['ErrorMsg'])) {
                $model->errorMsg = $map['ErrorMsg'];
            }
        }

        return $model;
    }
}
