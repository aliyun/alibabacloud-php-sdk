<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflo\V20220530\Models\GetErRouteMapResponseBody;

use AlibabaCloud\Tea\Model;

class content extends Model
{
    /**
     * @description Policy behavior; optional values:
     *
     *   **permit**: Allow
     *   **deny**: Rejected
     *
     * @example permit
     *
     * @var string
     */
    public $action;

    /**
     * @description Policy description
     *
     * @example ssss
     *
     * @var string
     */
    public $description;

    /**
     * @description Destination CIDR block
     *
     * @example 0.0.0.0/0
     *
     * @var string
     */
    public $destinationCidrBlock;

    /**
     * @description Lingjun HUB ID
     *
     * @example er-kkopgtne
     *
     * @var string
     */
    public $erId;

    /**
     * @description Lingjun HUB routing policy ID
     *
     * @example er-rmap-uwglhzom
     *
     * @var string
     */
    public $erRouteMapId;

    /**
     * @description Lingjun HUB routing policy Name
     *
     * @example er-rmap-wulanchabu
     *
     * @var string
     */
    public $erRouteMapName;

    /**
     * @description The time when the data address was created.
     *
     * @example 1648085472000
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @description The time when the agent was last modified.
     *
     * @example 1648085472000
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @description The message that is returned.
     *
     * @example success
     *
     * @var string
     */
    public $message;

    /**
     * @description Receive Instance ID
     *
     * @example vpd-x25vxrb2
     *
     * @var string
     */
    public $receptionInstanceId;

    /**
     * @description Receive Instance Name
     *
     * @example vpd-receprion
     *
     * @var string
     */
    public $receptionInstanceName;

    /**
     * @description The tenant to which the receiving instance belongs
     *
     * @example 1620939556166277
     *
     * @var string
     */
    public $receptionInstanceOwner;

    /**
     * @description The type of the received instance. Optional values:
     *
     *   **VPD**: Lingjun network segment.
     *   **VCC**: Lingjun Connection.
     *
     * @example VPD
     *
     * @var string
     */
    public $receptionInstanceType;

    /**
     * @description The region ID.
     *
     * @example cn-wulanchabu
     *
     * @var string
     */
    public $regionId;

    /**
     * @description Resource group instance ID
     *
     * @example rg-aekzlki4ehfse4y
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The ID of the policy.
     *
     * A smaller sequence number indicates a lower priority. When a route is matched, a policy with a higher priority is preferentially matched.
     *
     **Valid values: 1001 to 2000**
     *
     * @example 1001
     *
     * @var int
     */
    public $routeMapNum;

    /**
     * @description The status of the cache reserve instance. Valid values:
     *
     *   **Available**
     *   **Not Available**: Unavailable
     *   **Executing**: Executing
     *   **Deleting**: The node is being deleted.
     *
     * @example Available
     *
     * @var string
     */
    public $status;

    /**
     * @description The ID of the tenant.
     *
     * @example 1655449505171
     *
     * @var string
     */
    public $tenantId;

    /**
     * @description Release Instance ID
     *
     * @example vpd-xgkb2kl
     *
     * @var string
     */
    public $transmissionInstanceId;

    /**
     * @description Release Instance Name
     *
     * @example vpd-transimit
     *
     * @var string
     */
    public $transmissionInstanceName;

    /**
     * @description The tenant to which the published instance belongs
     *
     * @example 1620939556166277
     *
     * @var string
     */
    public $transmissionInstanceOwner;

    /**
     * @description Publish instance type; optional values:
     *
     *   **VPD**: Lingjun network segment.
     *   **VCC**: Lingjun Connection.
     *
     * @example VPD
     *
     * @var string
     */
    public $transmissionInstanceType;
    protected $_name = [
        'action'                    => 'Action',
        'description'               => 'Description',
        'destinationCidrBlock'      => 'DestinationCidrBlock',
        'erId'                      => 'ErId',
        'erRouteMapId'              => 'ErRouteMapId',
        'erRouteMapName'            => 'ErRouteMapName',
        'gmtCreate'                 => 'GmtCreate',
        'gmtModified'               => 'GmtModified',
        'message'                   => 'Message',
        'receptionInstanceId'       => 'ReceptionInstanceId',
        'receptionInstanceName'     => 'ReceptionInstanceName',
        'receptionInstanceOwner'    => 'ReceptionInstanceOwner',
        'receptionInstanceType'     => 'ReceptionInstanceType',
        'regionId'                  => 'RegionId',
        'resourceGroupId'           => 'ResourceGroupId',
        'routeMapNum'               => 'RouteMapNum',
        'status'                    => 'Status',
        'tenantId'                  => 'TenantId',
        'transmissionInstanceId'    => 'TransmissionInstanceId',
        'transmissionInstanceName'  => 'TransmissionInstanceName',
        'transmissionInstanceOwner' => 'TransmissionInstanceOwner',
        'transmissionInstanceType'  => 'TransmissionInstanceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->action) {
            $res['Action'] = $this->action;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->destinationCidrBlock) {
            $res['DestinationCidrBlock'] = $this->destinationCidrBlock;
        }
        if (null !== $this->erId) {
            $res['ErId'] = $this->erId;
        }
        if (null !== $this->erRouteMapId) {
            $res['ErRouteMapId'] = $this->erRouteMapId;
        }
        if (null !== $this->erRouteMapName) {
            $res['ErRouteMapName'] = $this->erRouteMapName;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->receptionInstanceId) {
            $res['ReceptionInstanceId'] = $this->receptionInstanceId;
        }
        if (null !== $this->receptionInstanceName) {
            $res['ReceptionInstanceName'] = $this->receptionInstanceName;
        }
        if (null !== $this->receptionInstanceOwner) {
            $res['ReceptionInstanceOwner'] = $this->receptionInstanceOwner;
        }
        if (null !== $this->receptionInstanceType) {
            $res['ReceptionInstanceType'] = $this->receptionInstanceType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->routeMapNum) {
            $res['RouteMapNum'] = $this->routeMapNum;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }
        if (null !== $this->transmissionInstanceId) {
            $res['TransmissionInstanceId'] = $this->transmissionInstanceId;
        }
        if (null !== $this->transmissionInstanceName) {
            $res['TransmissionInstanceName'] = $this->transmissionInstanceName;
        }
        if (null !== $this->transmissionInstanceOwner) {
            $res['TransmissionInstanceOwner'] = $this->transmissionInstanceOwner;
        }
        if (null !== $this->transmissionInstanceType) {
            $res['TransmissionInstanceType'] = $this->transmissionInstanceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return content
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Action'])) {
            $model->action = $map['Action'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DestinationCidrBlock'])) {
            $model->destinationCidrBlock = $map['DestinationCidrBlock'];
        }
        if (isset($map['ErId'])) {
            $model->erId = $map['ErId'];
        }
        if (isset($map['ErRouteMapId'])) {
            $model->erRouteMapId = $map['ErRouteMapId'];
        }
        if (isset($map['ErRouteMapName'])) {
            $model->erRouteMapName = $map['ErRouteMapName'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['ReceptionInstanceId'])) {
            $model->receptionInstanceId = $map['ReceptionInstanceId'];
        }
        if (isset($map['ReceptionInstanceName'])) {
            $model->receptionInstanceName = $map['ReceptionInstanceName'];
        }
        if (isset($map['ReceptionInstanceOwner'])) {
            $model->receptionInstanceOwner = $map['ReceptionInstanceOwner'];
        }
        if (isset($map['ReceptionInstanceType'])) {
            $model->receptionInstanceType = $map['ReceptionInstanceType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['RouteMapNum'])) {
            $model->routeMapNum = $map['RouteMapNum'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }
        if (isset($map['TransmissionInstanceId'])) {
            $model->transmissionInstanceId = $map['TransmissionInstanceId'];
        }
        if (isset($map['TransmissionInstanceName'])) {
            $model->transmissionInstanceName = $map['TransmissionInstanceName'];
        }
        if (isset($map['TransmissionInstanceOwner'])) {
            $model->transmissionInstanceOwner = $map['TransmissionInstanceOwner'];
        }
        if (isset($map['TransmissionInstanceType'])) {
            $model->transmissionInstanceType = $map['TransmissionInstanceType'];
        }

        return $model;
    }
}
