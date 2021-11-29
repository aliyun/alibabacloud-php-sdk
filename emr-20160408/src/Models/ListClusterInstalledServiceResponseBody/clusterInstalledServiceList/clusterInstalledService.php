<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\ListClusterInstalledServiceResponseBody\clusterInstalledServiceList;

use AlibabaCloud\SDK\Emr\V20160408\Models\ListClusterInstalledServiceResponseBody\clusterInstalledServiceList\clusterInstalledService\serviceActionList;
use AlibabaCloud\Tea\Model;

class clusterInstalledService extends Model
{
    /**
     * @var serviceActionList
     */
    public $serviceActionList;

    /**
     * @var string
     */
    public $serviceDisplayName;

    /**
     * @var string
     */
    public $serviceEcmVersion;

    /**
     * @var string
     */
    public $serviceName;

    /**
     * @var string
     */
    public $serviceVersion;

    /**
     * @var string
     */
    public $state;

    /**
     * @var int
     */
    public $abnormalNum;

    /**
     * @var string
     */
    public $comment;

    /**
     * @var int
     */
    public $needRestartNum;

    /**
     * @var int
     */
    public $notStartedNum;

    /**
     * @var bool
     */
    public $onlyClient;

    /**
     * @var string
     */
    public $serviceStatus;
    protected $_name = [
        'serviceActionList'  => 'ServiceActionList',
        'serviceDisplayName' => 'ServiceDisplayName',
        'serviceEcmVersion'  => 'ServiceEcmVersion',
        'serviceName'        => 'ServiceName',
        'serviceVersion'     => 'ServiceVersion',
        'state'              => 'State',
        'abnormalNum'        => 'abnormalNum',
        'comment'            => 'comment',
        'needRestartNum'     => 'needRestartNum',
        'notStartedNum'      => 'notStartedNum',
        'onlyClient'         => 'onlyClient',
        'serviceStatus'      => 'serviceStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->serviceActionList) {
            $res['ServiceActionList'] = null !== $this->serviceActionList ? $this->serviceActionList->toMap() : null;
        }
        if (null !== $this->serviceDisplayName) {
            $res['ServiceDisplayName'] = $this->serviceDisplayName;
        }
        if (null !== $this->serviceEcmVersion) {
            $res['ServiceEcmVersion'] = $this->serviceEcmVersion;
        }
        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }
        if (null !== $this->serviceVersion) {
            $res['ServiceVersion'] = $this->serviceVersion;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->abnormalNum) {
            $res['abnormalNum'] = $this->abnormalNum;
        }
        if (null !== $this->comment) {
            $res['comment'] = $this->comment;
        }
        if (null !== $this->needRestartNum) {
            $res['needRestartNum'] = $this->needRestartNum;
        }
        if (null !== $this->notStartedNum) {
            $res['notStartedNum'] = $this->notStartedNum;
        }
        if (null !== $this->onlyClient) {
            $res['onlyClient'] = $this->onlyClient;
        }
        if (null !== $this->serviceStatus) {
            $res['serviceStatus'] = $this->serviceStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return clusterInstalledService
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ServiceActionList'])) {
            $model->serviceActionList = serviceActionList::fromMap($map['ServiceActionList']);
        }
        if (isset($map['ServiceDisplayName'])) {
            $model->serviceDisplayName = $map['ServiceDisplayName'];
        }
        if (isset($map['ServiceEcmVersion'])) {
            $model->serviceEcmVersion = $map['ServiceEcmVersion'];
        }
        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }
        if (isset($map['ServiceVersion'])) {
            $model->serviceVersion = $map['ServiceVersion'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['abnormalNum'])) {
            $model->abnormalNum = $map['abnormalNum'];
        }
        if (isset($map['comment'])) {
            $model->comment = $map['comment'];
        }
        if (isset($map['needRestartNum'])) {
            $model->needRestartNum = $map['needRestartNum'];
        }
        if (isset($map['notStartedNum'])) {
            $model->notStartedNum = $map['notStartedNum'];
        }
        if (isset($map['onlyClient'])) {
            $model->onlyClient = $map['onlyClient'];
        }
        if (isset($map['serviceStatus'])) {
            $model->serviceStatus = $map['serviceStatus'];
        }

        return $model;
    }
}
