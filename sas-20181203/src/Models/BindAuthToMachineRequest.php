<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class BindAuthToMachineRequest extends Model
{
    /**
     * @description The edition of Security Center that is authorized to scan the asset. Valid values:
     *
     *   **6**: Anti-virus
     *   **5**: Advanced
     *   **3**: Enterprise
     *   **7**: Ultimate
     *   **10**: Value-added Plan
     *
     * @example 6
     *
     * @var int
     */
    public $authVersion;

    /**
     * @description Specifies whether to automatically bind servers to Security Center. Valid values:
     *
     *   **0**: no
     *   **1**: yes
     *
     * @example 1
     *
     * @var int
     */
    public $autoBind;

    /**
     * @description The UUIDs of the servers that you want to bind to Security Center.
     *
     * >  You must specify at least one of the **Bind** and **UnBind** parameters.
     * @var string[]
     */
    public $bind;

    /**
     * @description Specifies whether to bind all servers to Security Center. Default value: **false**. Valid values:
     *
     *   **true**: yes
     *   **false**: no
     *
     * @example true
     *
     * @var bool
     */
    public $bindAll;

    /**
     * @description The search conditions that are used to filter servers. The value of this parameter is in the JSON format and is case-sensitive.
     *
     * >  A search condition can be an instance ID, instance name, virtual private cloud (VPC) ID, region, or public IP address. You can call the [DescribeCriteria](~~DescribeCriteria~~) operation to query the supported search conditions.
     * @example [{"name":"riskStatus","value":"YES"},{"name":"internetIp","value":"1.2.XX.XX"}]
     *
     * @var string
     */
    public $criteria;

    /**
     * @description Specifies whether to specify servers for protection when you purchase Security Center. Valid values:
     *
     *   **0**: no
     *   **1**: yes
     *
     * >  If you specify servers, the servers are automatically added to Security Center for protection after the purchase order is complete.
     * @example 1
     *
     * @var int
     */
    public $isPreBind;

    /**
     * @description The logical relationship that you want to use to evaluate multiple search conditions. Default value: **OR**. Valid values:
     *
     *   **OR******
     *   **AND******
     *
     * @example OR
     *
     * @var string
     */
    public $logicalExp;

    /**
     * @description The edition of Security Center that you purchase in the order. Valid values:
     *
     *   **level7**: Anti-virus
     *   **level3**: Advanced
     *   **level2**: Enterprise
     *   **level8**: Ultimate
     *   **level10**: Value-added Plan
     *
     * @example level2
     *
     * @var string
     */
    public $ntmVersion;

    /**
     * @description The ID of the order in which Security Center is purchased and servers are specified for protection.
     *
     * @example 233016**0482
     *
     * @var int
     */
    public $preBindOrderId;

    /**
     * @description The UUIDs of the servers that you want to unbind from Security Center.
     *
     * >  You must specify at least one of the **Bind** and **UnBind** parameters.
     * @var string[]
     */
    public $unBind;
    protected $_name = [
        'authVersion'    => 'AuthVersion',
        'autoBind'       => 'AutoBind',
        'bind'           => 'Bind',
        'bindAll'        => 'BindAll',
        'criteria'       => 'Criteria',
        'isPreBind'      => 'IsPreBind',
        'logicalExp'     => 'LogicalExp',
        'ntmVersion'     => 'NtmVersion',
        'preBindOrderId' => 'PreBindOrderId',
        'unBind'         => 'UnBind',
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
        if (null !== $this->isPreBind) {
            $res['IsPreBind'] = $this->isPreBind;
        }
        if (null !== $this->logicalExp) {
            $res['LogicalExp'] = $this->logicalExp;
        }
        if (null !== $this->ntmVersion) {
            $res['NtmVersion'] = $this->ntmVersion;
        }
        if (null !== $this->preBindOrderId) {
            $res['PreBindOrderId'] = $this->preBindOrderId;
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
        if (isset($map['IsPreBind'])) {
            $model->isPreBind = $map['IsPreBind'];
        }
        if (isset($map['LogicalExp'])) {
            $model->logicalExp = $map['LogicalExp'];
        }
        if (isset($map['NtmVersion'])) {
            $model->ntmVersion = $map['NtmVersion'];
        }
        if (isset($map['PreBindOrderId'])) {
            $model->preBindOrderId = $map['PreBindOrderId'];
        }
        if (isset($map['UnBind'])) {
            if (!empty($map['UnBind'])) {
                $model->unBind = $map['UnBind'];
            }
        }

        return $model;
    }
}
