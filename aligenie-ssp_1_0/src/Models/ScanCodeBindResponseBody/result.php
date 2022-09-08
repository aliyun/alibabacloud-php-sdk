<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\ScanCodeBindResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $bizGroup;

    /**
     * @var string
     */
    public $bizType;
    protected $_name = [
        'bizGroup' => 'bizGroup',
        'bizType'  => 'bizType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizGroup) {
            $res['bizGroup'] = $this->bizGroup;
        }
        if (null !== $this->bizType) {
            $res['bizType'] = $this->bizType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['bizGroup'])) {
            $model->bizGroup = $map['bizGroup'];
        }
        if (isset($map['bizType'])) {
            $model->bizType = $map['bizType'];
        }

        return $model;
    }
}
