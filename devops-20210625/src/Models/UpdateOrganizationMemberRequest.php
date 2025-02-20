<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Dara\Model;

class UpdateOrganizationMemberRequest extends Model
{
    /**
     * @var string
     */
    public $organizationMemberName;
    protected $_name = [
        'organizationMemberName' => 'organizationMemberName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->organizationMemberName) {
            $res['organizationMemberName'] = $this->organizationMemberName;
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
        if (isset($map['organizationMemberName'])) {
            $model->organizationMemberName = $map['organizationMemberName'];
        }

        return $model;
    }
}
