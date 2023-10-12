<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models;

use AlibabaCloud\Tea\Model;

class CreateDedicatedLineRequest extends Model
{
    /**
     * @example 100
     *
     * @var int
     */
    public $bandwidth;

    /**
     * @example e33320bc-7b29-4d0b-abe1-f15804c1c567
     *
     * @var string
     */
    public $clientToken;

    /**
     * @example 张三
     *
     * @var string
     */
    public $contact;

    /**
     * @example 111.111.xxx.xxx
     *
     * @var string
     */
    public $dedicatedLineGateway;

    /**
     * @example 111.111.xxx.xxx
     *
     * @var string
     */
    public $dedicatedLineIp;

    /**
     * @example 主
     *
     * @var string
     */
    public $dedicatedLineRole;

    /**
     * @example 备注
     *
     * @var string
     */
    public $description;

    /**
     * @example device-evve560juend5owh
     *
     * @var string
     */
    public $deviceId;

    /**
     * @example GigabitEthernet1/0/0
     *
     * @var string
     */
    public $devicePort;

    /**
     * @example 2022-06-14 04:00:00
     *
     * @var string
     */
    public $expirationDate;

    /**
     * @example {"Location":"cdc"}
     *
     * @var string
     */
    public $extAttributes;

    /**
     * @example cmn-cn-xxxx
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example 电信
     *
     * @var string
     */
    public $isp;

    /**
     * @example space_isp_form-garigikip9zrog
     *
     * @var string
     */
    public $ispFormId;

    /**
     * @example isp-dhyw2lxfpcs80d9
     *
     * @var string
     */
    public $ispId;

    /**
     * @example 测试专线
     *
     * @var string
     */
    public $keyword;

    /**
     * @example 2022-06-13 12:00:00
     *
     * @var string
     */
    public $onlineDate;

    /**
     * @example 133xxxxxxxx
     *
     * @var string
     */
    public $phone;

    /**
     * @example space-ez6zd3w68ma4fsd4
     *
     * @var string
     */
    public $physicalSpaceId;
    protected $_name = [
        'bandwidth'            => 'Bandwidth',
        'clientToken'          => 'ClientToken',
        'contact'              => 'Contact',
        'dedicatedLineGateway' => 'DedicatedLineGateway',
        'dedicatedLineIp'      => 'DedicatedLineIp',
        'dedicatedLineRole'    => 'DedicatedLineRole',
        'description'          => 'Description',
        'deviceId'             => 'DeviceId',
        'devicePort'           => 'DevicePort',
        'expirationDate'       => 'ExpirationDate',
        'extAttributes'        => 'ExtAttributes',
        'instanceId'           => 'InstanceId',
        'isp'                  => 'Isp',
        'ispFormId'            => 'IspFormId',
        'ispId'                => 'IspId',
        'keyword'              => 'Keyword',
        'onlineDate'           => 'OnlineDate',
        'phone'                => 'Phone',
        'physicalSpaceId'      => 'PhysicalSpaceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->contact) {
            $res['Contact'] = $this->contact;
        }
        if (null !== $this->dedicatedLineGateway) {
            $res['DedicatedLineGateway'] = $this->dedicatedLineGateway;
        }
        if (null !== $this->dedicatedLineIp) {
            $res['DedicatedLineIp'] = $this->dedicatedLineIp;
        }
        if (null !== $this->dedicatedLineRole) {
            $res['DedicatedLineRole'] = $this->dedicatedLineRole;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->deviceId) {
            $res['DeviceId'] = $this->deviceId;
        }
        if (null !== $this->devicePort) {
            $res['DevicePort'] = $this->devicePort;
        }
        if (null !== $this->expirationDate) {
            $res['ExpirationDate'] = $this->expirationDate;
        }
        if (null !== $this->extAttributes) {
            $res['ExtAttributes'] = $this->extAttributes;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->isp) {
            $res['Isp'] = $this->isp;
        }
        if (null !== $this->ispFormId) {
            $res['IspFormId'] = $this->ispFormId;
        }
        if (null !== $this->ispId) {
            $res['IspId'] = $this->ispId;
        }
        if (null !== $this->keyword) {
            $res['Keyword'] = $this->keyword;
        }
        if (null !== $this->onlineDate) {
            $res['OnlineDate'] = $this->onlineDate;
        }
        if (null !== $this->phone) {
            $res['Phone'] = $this->phone;
        }
        if (null !== $this->physicalSpaceId) {
            $res['PhysicalSpaceId'] = $this->physicalSpaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDedicatedLineRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['Contact'])) {
            $model->contact = $map['Contact'];
        }
        if (isset($map['DedicatedLineGateway'])) {
            $model->dedicatedLineGateway = $map['DedicatedLineGateway'];
        }
        if (isset($map['DedicatedLineIp'])) {
            $model->dedicatedLineIp = $map['DedicatedLineIp'];
        }
        if (isset($map['DedicatedLineRole'])) {
            $model->dedicatedLineRole = $map['DedicatedLineRole'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DeviceId'])) {
            $model->deviceId = $map['DeviceId'];
        }
        if (isset($map['DevicePort'])) {
            $model->devicePort = $map['DevicePort'];
        }
        if (isset($map['ExpirationDate'])) {
            $model->expirationDate = $map['ExpirationDate'];
        }
        if (isset($map['ExtAttributes'])) {
            $model->extAttributes = $map['ExtAttributes'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Isp'])) {
            $model->isp = $map['Isp'];
        }
        if (isset($map['IspFormId'])) {
            $model->ispFormId = $map['IspFormId'];
        }
        if (isset($map['IspId'])) {
            $model->ispId = $map['IspId'];
        }
        if (isset($map['Keyword'])) {
            $model->keyword = $map['Keyword'];
        }
        if (isset($map['OnlineDate'])) {
            $model->onlineDate = $map['OnlineDate'];
        }
        if (isset($map['Phone'])) {
            $model->phone = $map['Phone'];
        }
        if (isset($map['PhysicalSpaceId'])) {
            $model->physicalSpaceId = $map['PhysicalSpaceId'];
        }

        return $model;
    }
}
