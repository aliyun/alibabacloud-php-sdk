<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models;

use AlibabaCloud\Tea\Model;

class AddShareReportRequest extends Model
{
    /**
     * @description The scope of authorization. Valid values:
     *
     *   1: view only
     *   3: View and export
     *
     * This parameter is required.
     * @example 3
     *
     * @var int
     */
    public $authPoint;

    /**
     * @description The validity period of the share. The value is a timestamp in milliseconds.
     *
     * This parameter is required.
     * @example 1608202110838
     *
     * @var int
     */
    public $expireDate;

    /**
     * @description The ID of the person to be shared, which may be the user ID of the Quick BI or the user group ID.
     *
     *   If ShareToType is 0 (user), ShareTo is the user ID.
     *   When ShareToType is set to 1 (user group), ShareTo is the user group ID.
     *   When ShareToType=2 (organization), ShareTo is the ID of the organization.
     *
     * @example de4bc5f9429141cc8091cdd1c15b****
     *
     * @var string
     */
    public $shareToId;

    /**
     * @description The share type of the template. Valid values:
     *
     *   0: user
     *   1: user group
     *   2: organization
     *
     * This parameter is required.
     * @example 0
     *
     * @var int
     */
    public $shareToType;

    /**
     * @description The ID of the shared work. The works here include BI portal, dashboards, spreadsheets, and self-service access.
     *
     * This parameter is required.
     * @example 6b407e50-e774-406b-9956-da2425c2****
     *
     * @var string
     */
    public $worksId;
    protected $_name = [
        'authPoint'   => 'AuthPoint',
        'expireDate'  => 'ExpireDate',
        'shareToId'   => 'ShareToId',
        'shareToType' => 'ShareToType',
        'worksId'     => 'WorksId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authPoint) {
            $res['AuthPoint'] = $this->authPoint;
        }
        if (null !== $this->expireDate) {
            $res['ExpireDate'] = $this->expireDate;
        }
        if (null !== $this->shareToId) {
            $res['ShareToId'] = $this->shareToId;
        }
        if (null !== $this->shareToType) {
            $res['ShareToType'] = $this->shareToType;
        }
        if (null !== $this->worksId) {
            $res['WorksId'] = $this->worksId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddShareReportRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthPoint'])) {
            $model->authPoint = $map['AuthPoint'];
        }
        if (isset($map['ExpireDate'])) {
            $model->expireDate = $map['ExpireDate'];
        }
        if (isset($map['ShareToId'])) {
            $model->shareToId = $map['ShareToId'];
        }
        if (isset($map['ShareToType'])) {
            $model->shareToType = $map['ShareToType'];
        }
        if (isset($map['WorksId'])) {
            $model->worksId = $map['WorksId'];
        }

        return $model;
    }
}
