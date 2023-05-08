<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class BindAuthToMachineRequest extends Model
{
    /**
     * @description The edition of Security Center. Valid values:
     *
     *   **6**: Anti-virus edition
     *   **5**: Advanced edition
     *   **3**: Enterprise edition
     *   **7**: Ultimate edition
     *   **10**: Value-added Plan edition
     *
     * @example 6
     *
     * @var int
     */
    public $authVersion;

    /**
     * @description The shortage in the quota for cores of servers that can be protected.
     *
     * @example 1
     *
     * @var int
     */
    public $autoBind;

    /**
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *
     * @var string[]
     */
    public $bind;

    /**
     * @description The UUID of the server that you want to bind to Security Center.
     *
     * >  You can call the [DescribeCloudCenterInstances](~~DescribeCloudCenterInstances~~) operation to query the UUIDs of servers.
     * @example true
     *
     * @var bool
     */
    public $bindAll;

    /**
     * @description The status code that indicates the result. Valid values:
     *
     *   **0**: The servers are bound to or unbound from Security Center.
     *   **1**: The values that you specified for the parameters are invalid.
     *   **2**: The quota for servers that can be protected is insufficient.
     *   **3**: The quota for cores of servers that can be protected is insufficient.
     *
     * @example [{"name":"riskStatus","value":"YES"},{"name":"internetIp","value":"1.2.XX.XX"}]
     *
     * @var string
     */
    public $criteria;

    /**
     * @description The search conditions that are used to filter servers. The value of this parameter is in the JSON format and is case-sensitive.
     *
     * >  A search condition can be an instance ID, instance name, virtual private cloud (VPC) ID, region, or public IP address. You can call the [DescribeCriteria](~~DescribeCriteria~~) operation to query the supported search conditions.
     * @example OR
     *
     * @var string
     */
    public $logicalExp;

    /**
     * @description Binds servers to Security Center or unbinds servers from Security Center.
     *
     * @var string[]
     */
    public $unBind;
    protected $_name = [
        'authVersion' => 'AuthVersion',
        'autoBind'    => 'AutoBind',
        'bind'        => 'Bind',
        'bindAll'     => 'BindAll',
        'criteria'    => 'Criteria',
        'logicalExp'  => 'LogicalExp',
        'unBind'      => 'UnBind',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authVersion) {
            $res['AuthVersion'] = $this->authVersion;
        }
        if (null !== $this->autoBind) {
            $res['AutoBind'] = $this->autoBind;
        }
        if (null !== $this->bind) {
            $res['Bind'] = $this->bind;
        }
        if (null !== $this->bindAll) {
            $res['BindAll'] = $this->bindAll;
        }
        if (null !== $this->criteria) {
            $res['Criteria'] = $this->criteria;
        }
        if (null !== $this->logicalExp) {
            $res['LogicalExp'] = $this->logicalExp;
        }
        if (null !== $this->unBind) {
            $res['UnBind'] = $this->unBind;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BindAuthToMachineRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthVersion'])) {
            $model->authVersion = $map['AuthVersion'];
        }
        if (isset($map['AutoBind'])) {
            $model->autoBind = $map['AutoBind'];
        }
        if (isset($map['Bind'])) {
            if (!empty($map['Bind'])) {
                $model->bind = $map['Bind'];
            }
        }
        if (isset($map['BindAll'])) {
            $model->bindAll = $map['BindAll'];
        }
        if (isset($map['Criteria'])) {
            $model->criteria = $map['Criteria'];
        }
        if (isset($map['LogicalExp'])) {
            $model->logicalExp = $map['LogicalExp'];
        }
        if (isset($map['UnBind'])) {
            if (!empty($map['UnBind'])) {
                $model->unBind = $map['UnBind'];
            }
        }

        return $model;
    }
}
