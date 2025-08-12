<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsuser\V20210308\Models;

use AlibabaCloud\Dara\Model;

class MoveOrgRequest extends Model
{
    /**
     * @var string
     */
    public $newParentOrgId;

    /**
     * @var string
     */
    public $orgId;
    protected $_name = [
        'newParentOrgId' => 'NewParentOrgId',
        'orgId' => 'OrgId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->newParentOrgId) {
            $res['NewParentOrgId'] = $this->newParentOrgId;
        }

        if (null !== $this->orgId) {
            $res['OrgId'] = $this->orgId;
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
        if (isset($map['NewParentOrgId'])) {
            $model->newParentOrgId = $map['NewParentOrgId'];
        }

        if (isset($map['OrgId'])) {
            $model->orgId = $map['OrgId'];
        }

        return $model;
    }
}
