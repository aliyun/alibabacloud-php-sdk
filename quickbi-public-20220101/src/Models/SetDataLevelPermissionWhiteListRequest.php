<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models;

use AlibabaCloud\Dara\Model;

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
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->whiteListModel) {
            $res['WhiteListModel'] = $this->whiteListModel;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['WhiteListModel'])) {
            $model->whiteListModel = $map['WhiteListModel'];
        }

        return $model;
    }
}
