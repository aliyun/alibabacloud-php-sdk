<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ListAgentlessRiskUuidRequest extends Model
{
    /**
     * @description The page number.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description The instance ID of the asset.
     *
     * @example s-bp1g6wxdwps7s9dz****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The instance name of the asset.
     *
     * @example ca_cpm_****
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The public IP address of the asset that you want to query.
     *
     * @example 1.1.XX.XX
     *
     * @var string
     */
    public $internetIp;

    /**
     * @description The private IP address of the asset that you want to query.
     *
     * @example 172.26.XX.XX
     *
     * @var string
     */
    public $intranetIp;

    /**
     * @description The name of the instance.
     *
     * @example oracle-win-001****
     *
     * @var string
     */
    public $machineName;

    /**
     * @description The number of entries per page.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description Specifies whether risks exist. Valid values:
     *
     *   **true**: Risks exist.
     *   **false**: Risks do not exist.
     *
     * @example true
     *
     * @var bool
     */
    public $risk;

    /**
     * @description The name of the detection object.
     *
     * @example source-test-obj-0****
     *
     * @var string
     */
    public $targetName;

    /**
     * @description Specifies the type of the object being inspected. Valid values:
     *
     *   **1**: Host Snapshot.
     *   **2**: Host Image.
     *   **3**: User Snapshot.
     *   **4**: User Image.
     *
     * @example 3
     *
     * @var int
     */
    public $targetType;
    protected $_name = [
        'currentPage' => 'CurrentPage',
        'instanceId' => 'InstanceId',
        'instanceName' => 'InstanceName',
        'internetIp' => 'InternetIp',
        'intranetIp' => 'IntranetIp',
        'machineName' => 'MachineName',
        'pageSize' => 'PageSize',
        'risk' => 'Risk',
        'targetName' => 'TargetName',
        'targetType' => 'TargetType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->internetIp) {
            $res['InternetIp'] = $this->internetIp;
        }
        if (null !== $this->intranetIp) {
            $res['IntranetIp'] = $this->intranetIp;
        }
        if (null !== $this->machineName) {
            $res['MachineName'] = $this->machineName;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->risk) {
            $res['Risk'] = $this->risk;
        }
        if (null !== $this->targetName) {
            $res['TargetName'] = $this->targetName;
        }
        if (null !== $this->targetType) {
            $res['TargetType'] = $this->targetType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAgentlessRiskUuidRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['InternetIp'])) {
            $model->internetIp = $map['InternetIp'];
        }
        if (isset($map['IntranetIp'])) {
            $model->intranetIp = $map['IntranetIp'];
        }
        if (isset($map['MachineName'])) {
            $model->machineName = $map['MachineName'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Risk'])) {
            $model->risk = $map['Risk'];
        }
        if (isset($map['TargetName'])) {
            $model->targetName = $map['TargetName'];
        }
        if (isset($map['TargetType'])) {
            $model->targetType = $map['TargetType'];
        }

        return $model;
    }
}
