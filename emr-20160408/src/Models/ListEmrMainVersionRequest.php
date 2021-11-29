<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models;

use AlibabaCloud\Tea\Model;

class ListEmrMainVersionRequest extends Model
{
    /**
     * @var string
     */
    public $emrVersion;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var string
     */
    public $stackName;

    /**
     * @var string
     */
    public $stackVersion;
    protected $_name = [
        'emrVersion'      => 'EmrVersion',
        'pageNumber'      => 'PageNumber',
        'pageSize'        => 'PageSize',
        'regionId'        => 'RegionId',
        'resourceOwnerId' => 'ResourceOwnerId',
        'stackName'       => 'StackName',
        'stackVersion'    => 'StackVersion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->emrVersion) {
            $res['EmrVersion'] = $this->emrVersion;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->stackName) {
            $res['StackName'] = $this->stackName;
        }
        if (null !== $this->stackVersion) {
            $res['StackVersion'] = $this->stackVersion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListEmrMainVersionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EmrVersion'])) {
            $model->emrVersion = $map['EmrVersion'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['StackName'])) {
            $model->stackName = $map['StackName'];
        }
        if (isset($map['StackVersion'])) {
            $model->stackVersion = $map['StackVersion'];
        }

        return $model;
    }
}
