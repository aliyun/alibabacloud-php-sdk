<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListQuotaReviewTasksResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var int
     */
    public $appGroupId;

    /**
     * @var string
     */
    public $appGroupName;

    /**
     * @var string
     */
    public $appGroupType;

    /**
     * @var bool
     */
    public $approved;

    /**
     * @var bool
     */
    public $available;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $memo;

    /**
     * @var int
     */
    public $newComputeResource;

    /**
     * @var int
     */
    public $newSocSize;

    /**
     * @var string
     */
    public $newSpec;

    /**
     * @var int
     */
    public $oldComputeResource;

    /**
     * @var int
     */
    public $oldDocSize;

    /**
     * @var string
     */
    public $oldSpec;

    /**
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
