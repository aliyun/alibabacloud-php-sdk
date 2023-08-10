<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListQuotaReviewTasksResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description The ID of the application.
     *
     * @example 120123456
     *
     * @var int
     */
    public $appGroupId;

    /**
     * @description The name of the application.
     *
     * @example "td_test_os"
     *
     * @var string
     */
    public $appGroupName;

    /**
     * @description The type of the application.
     *
     * @example "standard"
     *
     * @var string
     */
    public $appGroupType;

    /**
     * @description Indicates whether the ticket is approved.
     *
     * @example true
     *
     * @var bool
     */
    public $approved;

    /**
     * @description Indicates whether the model is available.
     *
     * @example true
     *
     * @var bool
     */
    public $available;

    /**
     * @description The time when the ticket was created.
     *
     * @example "2020-04-08T08:29:45+0000"
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @description The time when the ticket was last updated.
     *
     * @example "2020-04-08T08:36:36+0000"
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @description The ID of the ticket.
     *
     * @example 142
     *
     * @var int
     */
    public $id;

    /**
     * @description The remarks of the ticket.
     *
     * @example null
     *
     * @var string
     */
    public $memo;

    /**
     * @description The computing resource quota that is applied for.
     *
     * @example 6000
     *
     * @var int
     */
    public $newComputeResource;

    /**
     * @description The storage capacity quota that is applied for.
     *
     * @example 1100
     *
     * @var int
     */
    public $newSocSize;

    /**
     * @description The application specifications that are applied for.
     *
     * @example "opensearch.private.common"
     *
     * @var string
     */
    public $newSpec;

    /**
     * @description The original quota of computing resources.
     *
     * @example 500
     *
     * @var int
     */
    public $oldComputeResource;

    /**
     * @description The original quota of storage capacity.
     *
     * @example 900
     *
     * @var int
     */
    public $oldDocSize;

    /**
     * @description The original application specifications.
     *
     * @example "opensearch.private.common"
     *
     * @var string
     */
    public $oldSpec;

    /**
     * @description Indicates whether the ticket is pending.
     *
     * @example false
     *
     * @var bool
     */
    public $pending;
    protected $_name = [
        'appGroupId'         => 'appGroupId',
        'appGroupName'       => 'appGroupName',
        'appGroupType'       => 'appGroupType',
        'approved'           => 'approved',
        'available'          => 'available',
        'gmtCreate'          => 'gmtCreate',
        'gmtModified'        => 'gmtModified',
        'id'                 => 'id',
        'memo'               => 'memo',
        'newComputeResource' => 'newComputeResource',
        'newSocSize'         => 'newSocSize',
        'newSpec'            => 'newSpec',
        'oldComputeResource' => 'oldComputeResource',
        'oldDocSize'         => 'oldDocSize',
        'oldSpec'            => 'oldSpec',
        'pending'            => 'pending',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appGroupId) {
            $res['appGroupId'] = $this->appGroupId;
        }
        if (null !== $this->appGroupName) {
            $res['appGroupName'] = $this->appGroupName;
        }
        if (null !== $this->appGroupType) {
            $res['appGroupType'] = $this->appGroupType;
        }
        if (null !== $this->approved) {
            $res['approved'] = $this->approved;
        }
        if (null !== $this->available) {
            $res['available'] = $this->available;
        }
        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['gmtModified'] = $this->gmtModified;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->memo) {
            $res['memo'] = $this->memo;
        }
        if (null !== $this->newComputeResource) {
            $res['newComputeResource'] = $this->newComputeResource;
        }
        if (null !== $this->newSocSize) {
            $res['newSocSize'] = $this->newSocSize;
        }
        if (null !== $this->newSpec) {
            $res['newSpec'] = $this->newSpec;
        }
        if (null !== $this->oldComputeResource) {
            $res['oldComputeResource'] = $this->oldComputeResource;
        }
        if (null !== $this->oldDocSize) {
            $res['oldDocSize'] = $this->oldDocSize;
        }
        if (null !== $this->oldSpec) {
            $res['oldSpec'] = $this->oldSpec;
        }
        if (null !== $this->pending) {
            $res['pending'] = $this->pending;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['appGroupId'])) {
            $model->appGroupId = $map['appGroupId'];
        }
        if (isset($map['appGroupName'])) {
            $model->appGroupName = $map['appGroupName'];
        }
        if (isset($map['appGroupType'])) {
            $model->appGroupType = $map['appGroupType'];
        }
        if (isset($map['approved'])) {
            $model->approved = $map['approved'];
        }
        if (isset($map['available'])) {
            $model->available = $map['available'];
        }
        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }
        if (isset($map['gmtModified'])) {
            $model->gmtModified = $map['gmtModified'];
        }
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }
        if (isset($map['memo'])) {
            $model->memo = $map['memo'];
        }
        if (isset($map['newComputeResource'])) {
            $model->newComputeResource = $map['newComputeResource'];
        }
        if (isset($map['newSocSize'])) {
            $model->newSocSize = $map['newSocSize'];
        }
        if (isset($map['newSpec'])) {
            $model->newSpec = $map['newSpec'];
        }
        if (isset($map['oldComputeResource'])) {
            $model->oldComputeResource = $map['oldComputeResource'];
        }
        if (isset($map['oldDocSize'])) {
            $model->oldDocSize = $map['oldDocSize'];
        }
        if (isset($map['oldSpec'])) {
            $model->oldSpec = $map['oldSpec'];
        }
        if (isset($map['pending'])) {
            $model->pending = $map['pending'];
        }

        return $model;
    }
}
