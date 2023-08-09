<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nis\V20211216\Models;

use AlibabaCloud\Tea\Model;

class GetNetworkReachableAnalysisResponseBody extends Model
{
    /**
     * @description The unique ID (UID) of the Alibaba Cloud account.
     *
     * @example 123147627844****
     *
     * @var int
     */
    public $aliUid;

    /**
     * @description The time when the network path was created. The time follows the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time is displayed in UTC.
     *
     * @example 2023-03-16T07:11:27Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The network path ID.
     *
     * @example np-2a1332214fa346b6****
     *
     * @var string
     */
    public $networkPathId;

    /**
     * @description The parameters of the network path.
     *
     * @example {
     * "sourceId": "i-bp100g5pbp6kj4p9****",
     * "sourceType": "ecs",
     * "targetId": "i-t4n4ltwgbbomzb0g****",
     * }
     * @var string
     */
    public $networkPathParameter;

    /**
     * @description The ID of the task for analyzing network reachability.
     *
     * @example nra-8607514e71c1484****
     *
     * @var string
     */
    public $networkReachableAnalysisId;

    /**
     * @description The result of network reachability analysis, which includes the network topology, error codes of network unreachability, and rules of network unreachability.
     *
     * @example {
     * },
     * "nraId": "nra-f2c8701a36424094****",
     * "requestId": "B931F8A0-620E-5230-B77F-3BD7F612****",
     * "destinationCidr": "",
     * "destinationGroupId": "sg-wz980j96p8y99co5****",
     * "policy": "accept",
     * "resourceId": "eni-wz92ce4saz1jzazg****",
     * "securityGroupId": "sg-wz980j96p8y99co5****"
     * "policy": "",
     * "resourceId": "eni-wz97vry93t6z4lbd****",
     * "securityGroupId": "sg-wz980j96p8y99co****"
     * ],
     * "securityGroupReportId": "sgr-4479d23bb37241aab****"
     * {
     * "id": "i-wz91dk7bor557hp93zyv-->eni-wz92ce4saz1jzazg****",
     * "source": "i-wz91dk7bor557hp9****",
     * "target": "eni-wz92ce4saz1jzazg****"
     * {
     * "id": "eni-wz92ce4saz1jzazgi13d-->vsw-wz9slpwdcppwfrnee****",
     * "source": "eni-wz92ce4saz1jzazg****",
     * "target": "vsw-wz9slpwdcppwfrnee****"
     * {
     * "id": "vsw-wz9slpwdcppwfrneebcrp-->eni-wz97vry93t6z4lbd****",
     * "source": "vsw-wz9slpwdcppwfrnee****",
     * "target": "eni-wz97vry93t6z4lbd****"
     * {
     * "id": "eni-wz97vry93t6z4lbdgmfi-->i-wz91dk7bor557hp9****",
     * "source": "eni-wz97vry93t6z4lbd****",
     * "target": "i-wz91dk7bor557hp9****"
     * "aZone": "cn-shenzhen-d",
     * "bizInsId": "i-wz91dk7bor557hp9****",
     * "id": "i-wz91dk7bor557hp9****",
     * "aZone": "cn-shenzhen-d",
     * "bizInsId": "i-wz91dk7bor557hp9****",
     * "id": "i-wz91dk7bor557hp9****",
     * "aZone": "cn-shenzhen-d",
     * "bizInsId": "vsw-wz9slpwdcppwfrnee****",
     * "cidr": "192.168.0.0/24",
     * "id": "vsw-wz9slpwdcppwfrnee****",
     * {
     * "bizInsId": "eni-wz92ce4saz1jzazg****",
     * "id": "eni-wz92ce4saz1jzazg****",
     * {
     * "bizInsId": "eni-wz97vry93t6z4lbd****",
     * "id": "eni-wz97vry93t6z4lbd****",
     * {
     * "id": "i-wz91dk7bor557hp93zys-->eni-wz97vry93t6z4lbd****",
     * "source": "i-wz91dk7bor557hp9****",
     * "target": "eni-wz97vry93t6z4lbd****"
     * {
     * "id": "eni-wz97vry93t6z4lbdgmfi-->vsw-wz9slpwdcppwfrnee****",
     * "source": "eni-wz97vry93t6z4lbd****",
     * "target": "vsw-wz9slpwdcppwfrnee****"
     * {
     * "id": "vsw-wz9slpwdcppwfrneebcrp-->eni-wz92ce4saz1jzazg****",
     * "source": "vsw-wz9slpwdcppwfrnee****",
     * "target": "eni-wz92ce4saz1jzazg****"
     * {
     * "id": "eni-wz92ce4saz1jzazgi13d-->i-wz91dk7bor557hp9****",
     * "source": "eni-wz92ce4saz1jzazg****",
     * "target": "i-wz91dk7bor557hp9****"
     * "aZone": "cn-shenzhen-d",
     * "bizInsId": "i-wz91dk7bor557hp9****",
     * "id": "i-wz91dk7bor557hp9****",
     * "aZone": "cn-shenzhen-d",
     * "bizInsId": "i-wz91dk7bor557hp9****",
     * "id": "i-wz91dk7bor557hp9****",
     * "aZone": "cn-shenzhen-d",
     * "bizInsId": "vsw-wz9slpwdcppwfrnee****",
     * "cidr": "192.168.0.0/24",
     * "id": "vsw-wz9slpwdcppwfrnee****",
     * {
     * "bizInsId": "eni-wz97vry93t6z4lbd****",
     * "id": "eni-wz97vry93t6z4lbd****",
     * {
     * "bizInsId": "eni-wz92ce4saz1jzazg****",
     * "id": "eni-wz92ce4saz1jzazg****",
     * },
     * "topologyReportId": "tpr-21cf60002715491b8****"
     * }
     * @var string
     */
    public $networkReachableAnalysisResult;

    /**
     * @description The state of the task for analyzing network reachability. Valid values:
     *
     *   **init**: The task is in progress.
     *   **finish**: The task is complete.
     *   **error**: An analysis error occurred.
     *   **timeout**: The task timed out.
     *
     * @example finish
     *
     * @var string
     */
    public $networkReachableAnalysisStatus;

    /**
     * @description Indicates whether the network path is reachable. Valid values:
     *
     *   **true**: The network path is reachable.
     *   **false**: The network path is unreachable.
     *
     * @example true
     *
     * @var bool
     */
    public $reachable;

    /**
     * @description The request ID.
     *
     * @example DEE0FEAF-59AE-5CDD-AA07-626BC365D571
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'aliUid'                         => 'AliUid',
        'createTime'                     => 'CreateTime',
        'networkPathId'                  => 'NetworkPathId',
        'networkPathParameter'           => 'NetworkPathParameter',
        'networkReachableAnalysisId'     => 'NetworkReachableAnalysisId',
        'networkReachableAnalysisResult' => 'NetworkReachableAnalysisResult',
        'networkReachableAnalysisStatus' => 'NetworkReachableAnalysisStatus',
        'reachable'                      => 'Reachable',
        'requestId'                      => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliUid) {
            $res['AliUid'] = $this->aliUid;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->networkPathId) {
            $res['NetworkPathId'] = $this->networkPathId;
        }
        if (null !== $this->networkPathParameter) {
            $res['NetworkPathParameter'] = $this->networkPathParameter;
        }
        if (null !== $this->networkReachableAnalysisId) {
            $res['NetworkReachableAnalysisId'] = $this->networkReachableAnalysisId;
        }
        if (null !== $this->networkReachableAnalysisResult) {
            $res['NetworkReachableAnalysisResult'] = $this->networkReachableAnalysisResult;
        }
        if (null !== $this->networkReachableAnalysisStatus) {
            $res['NetworkReachableAnalysisStatus'] = $this->networkReachableAnalysisStatus;
        }
        if (null !== $this->reachable) {
            $res['Reachable'] = $this->reachable;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetNetworkReachableAnalysisResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliUid'])) {
            $model->aliUid = $map['AliUid'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['NetworkPathId'])) {
            $model->networkPathId = $map['NetworkPathId'];
        }
        if (isset($map['NetworkPathParameter'])) {
            $model->networkPathParameter = $map['NetworkPathParameter'];
        }
        if (isset($map['NetworkReachableAnalysisId'])) {
            $model->networkReachableAnalysisId = $map['NetworkReachableAnalysisId'];
        }
        if (isset($map['NetworkReachableAnalysisResult'])) {
            $model->networkReachableAnalysisResult = $map['NetworkReachableAnalysisResult'];
        }
        if (isset($map['NetworkReachableAnalysisStatus'])) {
            $model->networkReachableAnalysisStatus = $map['NetworkReachableAnalysisStatus'];
        }
        if (isset($map['Reachable'])) {
            $model->reachable = $map['Reachable'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
