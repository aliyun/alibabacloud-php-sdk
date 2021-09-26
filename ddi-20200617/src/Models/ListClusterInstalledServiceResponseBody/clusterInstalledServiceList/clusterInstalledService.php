<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddi\V20200617\Models\ListClusterInstalledServiceResponseBody\clusterInstalledServiceList;

use AlibabaCloud\SDK\Ddi\V20200617\Models\ListClusterInstalledServiceResponseBody\clusterInstalledServiceList\clusterInstalledService\serviceActionList;
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
     * @var bool
     */
    public $onlyClient;

    /**
     * @var string
     */
    public $comment;

    /**
     * @var int
     */
    public $notStartedNum;

    /**
     * @var int
     */
    public $needRestartNum;

    /**
     * @var string
     */
    public $serviceVersion;

    /**
     * @var string
     */
    public $serviceStatus;

    /**
     * @var string
     */
    public $serviceName;

    /**
     * @var int
     */
    public $abnormalNum;

    /**
     * @var serviceActionList
     */
    public $serviceActionList;
    protected $_name = [
        'serviceEcmVersion'  => 'ServiceEcmVersion',
        'serviceDisplayName' => 'ServiceDisplayName',
        'onlyClient'         => 'OnlyClient',
        'comment'            => 'Comment',
        'notStartedNum'      => 'NotStartedNum',
        'needRestartNum'     => 'NeedRestartNum',
        'serviceVersion'     => 'ServiceVersion',
        'serviceStatus'      => 'ServiceStatus',
        'serviceName'        => 'ServiceName',
        'abnormalNum'        => 'AbnormalNum',
        'serviceActionList'  => 'ServiceActionList',
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
        if (null !== $this->onlyClient) {
            $res['OnlyClient'] = $this->onlyClient;
        }
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
        if (null !== $this->notStartedNum) {
            $res['NotStartedNum'] = $this->notStartedNum;
        }
        if (null !== $this->needRestartNum) {
            $res['NeedRestartNum'] = $this->needRestartNum;
        }
        if (null !== $this->serviceVersion) {
            $res['ServiceVersion'] = $this->serviceVersion;
        }
        if (null !== $this->serviceStatus) {
            $res['ServiceStatus'] = $this->serviceStatus;
        }
        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }
        if (null !== $this->abnormalNum) {
            $res['AbnormalNum'] = $this->abnormalNum;
        }
        if (null !== $this->serviceActionList) {
            $res['ServiceActionList'] = null !== $this->serviceActionList ? $this->serviceActionList->toMap() : null;
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
        if (isset($map['OnlyClient'])) {
            $model->onlyClient = $map['OnlyClient'];
        }
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['NotStartedNum'])) {
            $model->notStartedNum = $map['NotStartedNum'];
        }
        if (isset($map['NeedRestartNum'])) {
            $model->needRestartNum = $map['NeedRestartNum'];
        }
        if (isset($map['ServiceVersion'])) {
            $model->serviceVersion = $map['ServiceVersion'];
        }
        if (isset($map['ServiceStatus'])) {
            $model->serviceStatus = $map['ServiceStatus'];
        }
        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }
        if (isset($map['AbnormalNum'])) {
            $model->abnormalNum = $map['AbnormalNum'];
        }
        if (isset($map['ServiceActionList'])) {
            $model->serviceActionList = serviceActionList::fromMap($map['ServiceActionList']);
        }

        return $model;
    }
}
