<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\ListProjectMembersResponseBody\members;

use AlibabaCloud\Tea\Model;

class organizationUserInfo extends Model
{
    /**
     * @description 企业唯一标识符
     *
     * @var string
     */
    public $organizationIdentifier;
    protected $_name = [
        'organizationIdentifier' => 'organizationIdentifier',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->organizationIdentifier) {
            $res['organizationIdentifier'] = $this->organizationIdentifier;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return organizationUserInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['organizationIdentifier'])) {
            $model->organizationIdentifier = $map['organizationIdentifier'];
        }

        return $model;
    }
}
