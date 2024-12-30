<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CreateBizEntityResponseBody;

use AlibabaCloud\Tea\Model;

class createResult extends Model
{
    /**
     * @example 12113111
     *
     * @var int
     */
    public $bizEntityId;
    protected $_name = [
        'bizEntityId' => 'BizEntityId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizEntityId) {
            $res['BizEntityId'] = $this->bizEntityId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return createResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizEntityId'])) {
            $model->bizEntityId = $map['BizEntityId'];
        }

        return $model;
    }
}
