<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Brainindustrial\V20200920\Models;

use AlibabaCloud\Tea\Model;

class MovePidOrganizationRequest extends Model
{
    /**
     * @var string
     */
    public $organizationId;

    /**
     * @var string
     */
    public $moveType;
    protected $_name = [
        'organizationId' => 'OrganizationId',
        'moveType'       => 'MoveType',
    ];

    public function validate()
    {
        Model::validateRequired('organizationId', $this->organizationId, true);
        Model::validateRequired('moveType', $this->moveType, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->organizationId) {
            $res['OrganizationId'] = $this->organizationId;
        }
        if (null !== $this->moveType) {
            $res['MoveType'] = $this->moveType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return MovePidOrganizationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OrganizationId'])) {
            $model->organizationId = $map['OrganizationId'];
        }
        if (isset($map['MoveType'])) {
            $model->moveType = $map['MoveType'];
        }

        return $model;
    }
}
