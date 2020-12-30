<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\ListClusterInstalledServiceResponseBody\clusterInstalledServiceList;

use AlibabaCloud\SDK\Emr\V20160408\Models\ListClusterInstalledServiceResponseBody\clusterInstalledServiceList\clusterInstalledService\serviceActionList;
use AlibabaCloud\Tea\Model;

class clusterInstalledService extends Model
{
    /**
     * @var string
     */
    public $serviceEcmVersion;

    /**
     * @var string
     */
    public $serviceDisplayName;

    /**
     * @var serviceActionList
     */
    public $serviceActionList;

    /**
     * @var int
     */
    public $notStartedNum;

    /**
     * @var string
     */
    public $serviceVersion;

    /**
     * @var string
     */
    public $comment;

    /**
     * @var int
     */
    public $abnormalNum;

    /**
     * @var string
     */
    public $serviceName;

    /**
     * @var bool
     */
    public $onlyClient;

    /**
     * @var string
     */
    public $serviceStatus;

    /**
     * @var int
     */
    public $needRestartNum;
    protected $_name = [
        'serviceEcmVersion'  => 'ServiceEcmVersion',
        'serviceDisplayName' => 'ServiceDisplayName',
        'serviceActionList'  => 'ServiceActionList',
        'notStartedNum'      => 'notStartedNum',
        'serviceVersion'     => 'ServiceVersion',
        'comment'            => 'comment',
        'abnormalNum'        => 'abnormalNum',
        'serviceName'        => 'ServiceName',
        'onlyClient'         => 'onlyClient',
        'serviceStatus'      => 'serviceStatus',
        'needRestartNum'     => 'needRestartNum',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->serviceEcmVersion) {
            $res['ServiceEcmVersion'] = $this->serviceEcmVersion;
        }
        if (null !== $this->serviceDisplayName) {
            $res['ServiceDisplayName'] = $this->serviceDisplayName;
        }
        if (null !== $this->serviceActionList) {
            $res['ServiceActionList'] = null !== $this->serviceActionList ? $this->serviceActionList->toMap() : null;
        }
        if (null !== $this->notStartedNum) {
            $res['notStartedNum'] = $this->notStartedNum;
        }
        if (null !== $this->serviceVersion) {
            $res['ServiceVersion'] = $this->serviceVersion;
        }
        if (null !== $this->comment) {
            $res['comment'] = $this->comment;
        }
        if (null !== $this->abnormalNum) {
            $res['abnormalNum'] = $this->abnormalNum;
        }
        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }
        if (null !== $this->onlyClient) {
            $res['onlyClient'] = $this->onlyClient;
        }
        if (null !== $this->serviceStatus) {
            $res['serviceStatus'] = $this->serviceStatus;
        }
        if (null !== $this->needRestartNum) {
            $res['needRestartNum'] = $this->needRestartNum;
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
        if (isset($map['ServiceEcmVersion'])) {
            $model->serviceEcmVersion = $map['ServiceEcmVersion'];
        }
        if (isset($map['ServiceDisplayName'])) {
            $model->serviceDisplayName = $map['ServiceDisplayName'];
        }
        if (isset($map['ServiceActionList'])) {
            $model->serviceActionList = serviceActionList::fromMap($map['ServiceActionList']);
        }
        if (isset($map['notStartedNum'])) {
            $model->notStartedNum = $map['notStartedNum'];
        }
        if (isset($map['ServiceVersion'])) {
            $model->serviceVersion = $map['ServiceVersion'];
        }
        if (isset($map['comment'])) {
            $model->comment = $map['comment'];
        }
        if (isset($map['abnormalNum'])) {
            $model->abnormalNum = $map['abnormalNum'];
        }
        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }
        if (isset($map['onlyClient'])) {
            $model->onlyClient = $map['onlyClient'];
        }
        if (isset($map['serviceStatus'])) {
            $model->serviceStatus = $map['serviceStatus'];
        }
        if (isset($map['needRestartNum'])) {
            $model->needRestartNum = $map['needRestartNum'];
        }

        return $model;
    }
}
