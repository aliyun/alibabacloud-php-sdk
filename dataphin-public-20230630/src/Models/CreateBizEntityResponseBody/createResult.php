<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CreateBizEntityResponseBody;

use AlibabaCloud\Dara\Model;

class createResult extends Model
{
    /**
     * @var int
     */
    public $bizEntityId;
    protected $_name = [
        'bizEntityId' => 'BizEntityId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizEntityId) {
            $res['BizEntityId'] = $this->bizEntityId;
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
        if (isset($map['BizEntityId'])) {
            $model->bizEntityId = $map['BizEntityId'];
        }

        return $model;
    }
}
