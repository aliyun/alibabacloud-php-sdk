<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models\ListServicesResponseBody;

use AlibabaCloud\Tea\Model;

class services extends Model
{
    /**
     * @example {"language":"java"}
     *
     * @var string
     */
    public $attributes;

    /**
     * @example 2025-07-01T02:23:59Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @example workspace api monitor test
     *
     * @var string
     */
    public $description;

    /**
     * @example test
     *
     * @var string
     */
    public $displayName;

    /**
     * @example kgcsf@192197e828d51aa
     *
     * @var string
     */
    public $pid;

    /**
     * @example jm2pl0yoqf@d4905cb11a4f218dfb0a8
     *
     * @var string
     */
    public $serviceId;

    /**
     * @example demo-app
     *
     * @var string
     */
    public $serviceName;

    /**
     * @example Running
     *
     * @var string
     */
    public $serviceStatus;

    /**
     * @example TRACE
     *
     * @var string
     */
    public $serviceType;

    /**
     * @example default-cms-1192928460540589-cn-hangzhou
     *
     * @var string
     */
    public $workspace;
    protected $_name = [
        'attributes' => 'attributes',
        'createTime' => 'createTime',
        'description' => 'description',
        'displayName' => 'displayName',
        'pid' => 'pid',
        'serviceId' => 'serviceId',
        'serviceName' => 'serviceName',
        'serviceStatus' => 'serviceStatus',
        'serviceType' => 'serviceType',
        'workspace' => 'workspace',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->attributes) {
            $res['attributes'] = $this->attributes;
        }
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->displayName) {
            $res['displayName'] = $this->displayName;
        }
        if (null !== $this->pid) {
            $res['pid'] = $this->pid;
        }
        if (null !== $this->serviceId) {
            $res['serviceId'] = $this->serviceId;
        }
        if (null !== $this->serviceName) {
            $res['serviceName'] = $this->serviceName;
        }
        if (null !== $this->serviceStatus) {
            $res['serviceStatus'] = $this->serviceStatus;
        }
        if (null !== $this->serviceType) {
            $res['serviceType'] = $this->serviceType;
        }
        if (null !== $this->workspace) {
            $res['workspace'] = $this->workspace;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return services
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['attributes'])) {
            $model->attributes = $map['attributes'];
        }
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['displayName'])) {
            $model->displayName = $map['displayName'];
        }
        if (isset($map['pid'])) {
            $model->pid = $map['pid'];
        }
        if (isset($map['serviceId'])) {
            $model->serviceId = $map['serviceId'];
        }
        if (isset($map['serviceName'])) {
            $model->serviceName = $map['serviceName'];
        }
        if (isset($map['serviceStatus'])) {
            $model->serviceStatus = $map['serviceStatus'];
        }
        if (isset($map['serviceType'])) {
            $model->serviceType = $map['serviceType'];
        }
        if (isset($map['workspace'])) {
            $model->workspace = $map['workspace'];
        }

        return $model;
    }
}
