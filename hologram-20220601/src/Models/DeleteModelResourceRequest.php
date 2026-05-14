<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hologram\V20220601\Models;

use AlibabaCloud\Dara\Model;

class DeleteModelResourceRequest extends Model
{
    /**
     * @var string
     */
    public $aiInstanceId;
    protected $_name = [
        'aiInstanceId' => 'aiInstanceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aiInstanceId) {
            $res['aiInstanceId'] = $this->aiInstanceId;
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
        if (isset($map['aiInstanceId'])) {
            $model->aiInstanceId = $map['aiInstanceId'];
        }

        return $model;
    }
}
