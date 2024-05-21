<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models;

use AlibabaCloud\Tea\Model;

class GetUserGroupInfoRequest extends Model
{
    /**
     * @description The ID of the user group.
     *
     * This parameter is required.
     * @example The user group modifier. The UserID of the Quick BI is used instead of the UID of Alibaba Cloud.
     *
     * @var string
     */
    public $keyword;
    protected $_name = [
        'keyword' => 'Keyword',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->keyword) {
            $res['Keyword'] = $this->keyword;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetUserGroupInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Keyword'])) {
            $model->keyword = $map['Keyword'];
        }

        return $model;
    }
}
