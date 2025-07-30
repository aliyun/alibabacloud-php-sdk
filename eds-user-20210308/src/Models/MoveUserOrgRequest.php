<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsuser\V20210308\Models;

use AlibabaCloud\Tea\Model;

class MoveUserOrgRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string[]
     */
    public $endUserIds;

    /**
     * @description This parameter is required.
     *
     * @example org-4mdgc1cocc59z****
     *
     * @var string
     */
    public $orgId;
    protected $_name = [
        'endUserIds' => 'EndUserIds',
        'orgId' => 'OrgId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->endUserIds) {
            $res['EndUserIds'] = $this->endUserIds;
        }
        if (null !== $this->orgId) {
            $res['OrgId'] = $this->orgId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return MoveUserOrgRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndUserIds'])) {
            if (!empty($map['EndUserIds'])) {
                $model->endUserIds = $map['EndUserIds'];
            }
        }
        if (isset($map['OrgId'])) {
            $model->orgId = $map['OrgId'];
        }

        return $model;
    }
}
