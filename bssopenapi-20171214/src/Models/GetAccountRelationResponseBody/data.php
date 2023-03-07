<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\GetAccountRelationResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The ID of the Alibaba Cloud account that is used as a member.
     *
     * @example ID of the Alibaba Cloud account that is used as a member
     *
     * @var int
     */
    public $childUserId;

    /**
     * @description The time when the financial relationship between the management account and the member was terminated.
     *
     * @example 2021-12-01
     *
     * @var int
     */
    public $endTime;

    /**
     * @description The time when the financial relationship between the management account and the member was modified.
     *
     * @example 2021-12-01
     *
     * @var int
     */
    public $gmtModified;

    /**
     * @description The ID of the financial relationship.
     *
     * @example ID of the financial relationship
     *
     * @var int
     */
    public $id;

    /**
     * @description The ID of the Alibaba Cloud account that is used as the management account.
     *
     * @example ID of the Alibaba Cloud account that is used as the management account
     *
     * @var int
     */
    public $parentUserId;

    /**
     * @description The time when the financial relationship between the management account and the member was established.
     *
     * @example 2021-11-01
     *
     * @var int
     */
    public $startTime;

    /**
     * @description The status of the financial relationship between the management account and the member.
     *
     * @example RELATED
     *
     * @var string
     */
    public $status;

    /**
     * @description The type of the financial relationship.
     *
     * @example enterprise_group
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'childUserId'  => 'ChildUserId',
        'endTime'      => 'EndTime',
        'gmtModified'  => 'GmtModified',
        'id'           => 'Id',
        'parentUserId' => 'ParentUserId',
        'startTime'    => 'StartTime',
        'status'       => 'Status',
        'type'         => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->childUserId) {
            $res['ChildUserId'] = $this->childUserId;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->parentUserId) {
            $res['ParentUserId'] = $this->parentUserId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChildUserId'])) {
            $model->childUserId = $map['ChildUserId'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['ParentUserId'])) {
            $model->parentUserId = $map['ParentUserId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
