<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribePhysicalConnectionLOAResponseBody;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribePhysicalConnectionLOAResponseBody\physicalConnectionLOAType\PMInfo;
use AlibabaCloud\Tea\Model;

class physicalConnectionLOAType extends Model
{
    /**
     * @description The name of the construction company.
     *
     * @example company
     *
     * @var string
     */
    public $companyLocalizedName;

    /**
     * @description The name of the organization that requires the Express Connect circuit.
     *
     * @example test1234
     *
     * @var string
     */
    public $companyName;

    /**
     * @description The time when construction starts.
     *
     * @example 2019-02-26T08:00:00Z
     *
     * @var string
     */
    public $constructionTime;

    /**
     * @description The ID of the Express Connect circuit.
     *
     * @example pc-bp1ca4wca27****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The circuit code provided by the connectivity provider.
     *
     * @example aaa111
     *
     * @var string
     */
    public $lineCode;

    /**
     * @description The label of the cable in the data center.
     *
     * @example bbb222
     *
     * @var string
     */
    public $lineLabel;

    /**
     * @description The type of the Express Connect circuit. Valid values:
     *
     *   **MSTP**
     *   **MPLSVPN**
     *   **FIBRE**
     *   **Other**
     *
     * @example FIBRE
     *
     * @var string
     */
    public $lineType;

    /**
     * @description The download URL of the LOA file.
     *
     * @example http://******
     *
     * @var string
     */
    public $loaUrl;

    /**
     * @description The information about the construction workers.
     *
     * @var PMInfo
     */
    public $PMInfo;

    /**
     * @description The on-site construction company.
     *
     * @example ctcu
     *
     * @var string
     */
    public $SI;

    /**
     * @description The status of the LOA. Valid values:
     *
     *   **Applying**: The LOA is pending for approval.
     *   **Accept**: The LOA is approved.
     *   **Available**: The LOA is available.
     *   **Rejected**: The LOA is rejected.
     *   **Completing**: The Express Connect circuit is under construction.
     *   **Complete**: The Express Connect circuit is installed.
     *   **Deleted**: The LOA is deleted.
     *
     * @example Available
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'companyLocalizedName' => 'CompanyLocalizedName',
        'companyName'          => 'CompanyName',
        'constructionTime'     => 'ConstructionTime',
        'instanceId'           => 'InstanceId',
        'lineCode'             => 'LineCode',
        'lineLabel'            => 'LineLabel',
        'lineType'             => 'LineType',
        'loaUrl'               => 'LoaUrl',
        'PMInfo'               => 'PMInfo',
        'SI'                   => 'SI',
        'status'               => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->companyLocalizedName) {
            $res['CompanyLocalizedName'] = $this->companyLocalizedName;
        }
        if (null !== $this->companyName) {
            $res['CompanyName'] = $this->companyName;
        }
        if (null !== $this->constructionTime) {
            $res['ConstructionTime'] = $this->constructionTime;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->lineCode) {
            $res['LineCode'] = $this->lineCode;
        }
        if (null !== $this->lineLabel) {
            $res['LineLabel'] = $this->lineLabel;
        }
        if (null !== $this->lineType) {
            $res['LineType'] = $this->lineType;
        }
        if (null !== $this->loaUrl) {
            $res['LoaUrl'] = $this->loaUrl;
        }
        if (null !== $this->PMInfo) {
            $res['PMInfo'] = null !== $this->PMInfo ? $this->PMInfo->toMap() : null;
        }
        if (null !== $this->SI) {
            $res['SI'] = $this->SI;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return physicalConnectionLOAType
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CompanyLocalizedName'])) {
            $model->companyLocalizedName = $map['CompanyLocalizedName'];
        }
        if (isset($map['CompanyName'])) {
            $model->companyName = $map['CompanyName'];
        }
        if (isset($map['ConstructionTime'])) {
            $model->constructionTime = $map['ConstructionTime'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['LineCode'])) {
            $model->lineCode = $map['LineCode'];
        }
        if (isset($map['LineLabel'])) {
            $model->lineLabel = $map['LineLabel'];
        }
        if (isset($map['LineType'])) {
            $model->lineType = $map['LineType'];
        }
        if (isset($map['LoaUrl'])) {
            $model->loaUrl = $map['LoaUrl'];
        }
        if (isset($map['PMInfo'])) {
            $model->PMInfo = PMInfo::fromMap($map['PMInfo']);
        }
        if (isset($map['SI'])) {
            $model->SI = $map['SI'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
