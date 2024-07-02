<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Tea\Model;

class UpdateOrganizationMemberRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $organizationMemberName;
    protected $_name = [
        'organizationMemberName' => 'organizationMemberName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->organizationMemberName) {
            $res['organizationMemberName'] = $this->organizationMemberName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateOrganizationMemberRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['organizationMemberName'])) {
            $model->organizationMemberName = $map['organizationMemberName'];
        }

        return $model;
    }
}
