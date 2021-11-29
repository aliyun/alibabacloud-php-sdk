<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models;

use AlibabaCloud\Tea\Model;

class ListClusterServiceConfigHistoryRequest extends Model
{
    /**
     * @var string
     */
    public $author;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $comment;

    /**
     * @var string
     */
    public $configFileName;

    /**
     * @var string
     */
    public $configItemKey;

    /**
     * @var string
     */
    public $configVersion;

    /**
     * @var string
     */
    public $hostGroupId;

    /**
     * @var string
     */
    public $hostInstanceId;

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
    public $serviceName;
    protected $_name = [
        'author'          => 'Author',
        'clusterId'       => 'ClusterId',
        'comment'         => 'Comment',
        'configFileName'  => 'ConfigFileName',
        'configItemKey'   => 'ConfigItemKey',
        'configVersion'   => 'ConfigVersion',
        'hostGroupId'     => 'HostGroupId',
        'hostInstanceId'  => 'HostInstanceId',
        'pageNumber'      => 'PageNumber',
        'pageSize'        => 'PageSize',
        'regionId'        => 'RegionId',
        'resourceOwnerId' => 'ResourceOwnerId',
        'serviceName'     => 'ServiceName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->author) {
            $res['Author'] = $this->author;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
        if (null !== $this->configFileName) {
            $res['ConfigFileName'] = $this->configFileName;
        }
        if (null !== $this->configItemKey) {
            $res['ConfigItemKey'] = $this->configItemKey;
        }
        if (null !== $this->configVersion) {
            $res['ConfigVersion'] = $this->configVersion;
        }
        if (null !== $this->hostGroupId) {
            $res['HostGroupId'] = $this->hostGroupId;
        }
        if (null !== $this->hostInstanceId) {
            $res['HostInstanceId'] = $this->hostInstanceId;
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
        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListClusterServiceConfigHistoryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Author'])) {
            $model->author = $map['Author'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['ConfigFileName'])) {
            $model->configFileName = $map['ConfigFileName'];
        }
        if (isset($map['ConfigItemKey'])) {
            $model->configItemKey = $map['ConfigItemKey'];
        }
        if (isset($map['ConfigVersion'])) {
            $model->configVersion = $map['ConfigVersion'];
        }
        if (isset($map['HostGroupId'])) {
            $model->hostGroupId = $map['HostGroupId'];
        }
        if (isset($map['HostInstanceId'])) {
            $model->hostInstanceId = $map['HostInstanceId'];
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
        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }

        return $model;
    }
}
