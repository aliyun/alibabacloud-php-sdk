<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models;

use AlibabaCloud\Tea\Model;

class SetDataLevelPermissionWhiteListRequest extends Model
{
    /**
     * @var string
     */
    public $whiteListModel;
    protected $_name = [
        'whiteListModel' => 'WhiteListModel',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->whiteListModel) {
            $res['WhiteListModel'] = $this->whiteListModel;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetDataLevelPermissionWhiteListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['WhiteListModel'])) {
            $model->whiteListModel = $map['WhiteListModel'];
        }

        return $model;
    }
}
