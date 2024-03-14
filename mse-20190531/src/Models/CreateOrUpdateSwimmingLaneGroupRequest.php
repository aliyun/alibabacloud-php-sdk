<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Tea\Model;

class CreateOrUpdateSwimmingLaneGroupRequest extends Model
{
    /**
     * @description The language of the response. Valid values:
     *
     *   zh: Chinese
     *   en: English
     *
     * @example zh
     *
     * @var string
     */
    public $acceptLanguage;

    /**
     * @description The IDs of applications. Separate application IDs with commas (,).
     *
     * @example hkhon1po62@c3df23522baa898,hkhon1po62@66e5235415730a5,hkhon1po62@958bba95910341f
     *
     * @var string
     */
    public $appIds;

    /**
     * @var int
     */
    public $canaryModel;

    /**
     * @description Specifies whether to enable database canary release.
     *
     * @example true
     *
     * @var bool
     */
    public $dbGrayEnable;

    /**
     * @description The ingress application.
     *
     * @example Ingress
     *
     * @var string
     */
    public $entryApp;

    /**
     * @description The ID of the lane group. A value of -1 is used to create a lane group. A value greater than 0 is used to modify the specified lane group.
     *
     * @example 120
     *
     * @var int
     */
    public $id;

    /**
     * @description The side for message filtering when the canary release for messaging feature is enabled.
     *
     * @example Server
     *
     * @var string
     */
    public $messageQueueFilterSide;

    /**
     * @description Specifies whether to enable canary release for messaging.
     *
     * @example true
     *
     * @var bool
     */
    public $messageQueueGrayEnable;

    /**
     * @description The name.
     *
     * @example group1
     *
     * @var string
     */
    public $name;

    /**
     * @description The name of the Microservices Engine (MSE) namespace.
     *
     * @example default
     *
     * @var string
     */
    public $namespace;

    /**
     * @var string[]
     */
    public $paths;

    /**
     * @description Specifies whether to record request details.
     *
     * @var bool
     */
    public $recordCanaryDetail;

    /**
     * @description The region ID.
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $region;

    /**
     * @var int[]
     */
    public $routeIds;

    /**
     * @description The status of the lane group. The value 0 specifies that the lane group is disabled. The value 1 specifies that the lane group is enabled.
     *
     * @example 0
     *
     * @var int
     */
    public $status;
    protected $_name = [
        'acceptLanguage'         => 'AcceptLanguage',
        'appIds'                 => 'AppIds',
        'canaryModel'            => 'CanaryModel',
        'dbGrayEnable'           => 'DbGrayEnable',
        'entryApp'               => 'EntryApp',
        'id'                     => 'Id',
        'messageQueueFilterSide' => 'MessageQueueFilterSide',
        'messageQueueGrayEnable' => 'MessageQueueGrayEnable',
        'name'                   => 'Name',
        'namespace'              => 'Namespace',
        'paths'                  => 'Paths',
        'recordCanaryDetail'     => 'RecordCanaryDetail',
        'region'                 => 'Region',
        'routeIds'               => 'RouteIds',
        'status'                 => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->acceptLanguage) {
            $res['AcceptLanguage'] = $this->acceptLanguage;
        }
        if (null !== $this->appIds) {
            $res['AppIds'] = $this->appIds;
        }
        if (null !== $this->canaryModel) {
            $res['CanaryModel'] = $this->canaryModel;
        }
        if (null !== $this->dbGrayEnable) {
            $res['DbGrayEnable'] = $this->dbGrayEnable;
        }
        if (null !== $this->entryApp) {
            $res['EntryApp'] = $this->entryApp;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->messageQueueFilterSide) {
            $res['MessageQueueFilterSide'] = $this->messageQueueFilterSide;
        }
        if (null !== $this->messageQueueGrayEnable) {
            $res['MessageQueueGrayEnable'] = $this->messageQueueGrayEnable;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->paths) {
            $res['Paths'] = $this->paths;
        }
        if (null !== $this->recordCanaryDetail) {
            $res['RecordCanaryDetail'] = $this->recordCanaryDetail;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->routeIds) {
            $res['RouteIds'] = $this->routeIds;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateOrUpdateSwimmingLaneGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceptLanguage'])) {
            $model->acceptLanguage = $map['AcceptLanguage'];
        }
        if (isset($map['AppIds'])) {
            $model->appIds = $map['AppIds'];
        }
        if (isset($map['CanaryModel'])) {
            $model->canaryModel = $map['CanaryModel'];
        }
        if (isset($map['DbGrayEnable'])) {
            $model->dbGrayEnable = $map['DbGrayEnable'];
        }
        if (isset($map['EntryApp'])) {
            $model->entryApp = $map['EntryApp'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['MessageQueueFilterSide'])) {
            $model->messageQueueFilterSide = $map['MessageQueueFilterSide'];
        }
        if (isset($map['MessageQueueGrayEnable'])) {
            $model->messageQueueGrayEnable = $map['MessageQueueGrayEnable'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['Paths'])) {
            if (!empty($map['Paths'])) {
                $model->paths = $map['Paths'];
            }
        }
        if (isset($map['RecordCanaryDetail'])) {
            $model->recordCanaryDetail = $map['RecordCanaryDetail'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['RouteIds'])) {
            if (!empty($map['RouteIds'])) {
                $model->routeIds = $map['RouteIds'];
            }
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
