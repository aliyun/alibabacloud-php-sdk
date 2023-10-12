<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models;

use AlibabaCloud\Tea\Model;

class ListDedicatedLinesRequest extends Model
{
    /**
     * @example 100
     *
     * @var int
     */
    public $bandwidth;

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
     * @example HZYT_USG6620_A
     *
     * @var string
     */
    public $deviceName;

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
     * @example cmn-cn-xxx
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example 中国电信
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
     * @example 飞天园区_中国电信_主
     *
     * @var string
     */
    public $keyword;

    /**
     * @example 测试
     *
     * @var string
     */
    public $keywords;

    /**
     * @example 10
     *
     * @var int
     */
    public $maxResults;

    /**
     * @example 1
     *
     * @var string
     */
    public $nextToken;

    /**
     * @example 2022-06-13 12:00:00
     *
     * @var string
     */
    public $onlineDate;

    /**
     * @example space-ez6zd3w68ma4fsd4
     *
     * @var string
     */
    public $physicalSpaceId;

    /**
     * @example 阿里巴巴西溪园区
     *
     * @var string
     */
    public $spaceName;
    protected $_name = [
        'bandwidth'            => 'Bandwidth',
        'dedicatedLineGateway' => 'DedicatedLineGateway',
        'dedicatedLineIp'      => 'DedicatedLineIp',
        'dedicatedLineRole'    => 'DedicatedLineRole',
        'description'          => 'Description',
        'deviceId'             => 'DeviceId',
        'deviceName'           => 'DeviceName',
        'devicePort'           => 'DevicePort',
        'expirationDate'       => 'ExpirationDate',
        'extAttributes'        => 'ExtAttributes',
        'instanceId'           => 'InstanceId',
        'isp'                  => 'Isp',
        'ispFormId'            => 'IspFormId',
        'ispId'                => 'IspId',
        'keyword'              => 'Keyword',
        'keywords'             => 'Keywords',
        'maxResults'           => 'MaxResults',
        'nextToken'            => 'NextToken',
        'onlineDate'           => 'OnlineDate',
        'physicalSpaceId'      => 'PhysicalSpaceId',
        'spaceName'            => 'SpaceName',
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
        if (null !== $this->deviceName) {
            $res['DeviceName'] = $this->deviceName;
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
        if (null !== $this->keywords) {
            $res['Keywords'] = $this->keywords;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->onlineDate) {
            $res['OnlineDate'] = $this->onlineDate;
        }
        if (null !== $this->physicalSpaceId) {
            $res['PhysicalSpaceId'] = $this->physicalSpaceId;
        }
        if (null !== $this->spaceName) {
            $res['SpaceName'] = $this->spaceName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDedicatedLinesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
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
        if (isset($map['DeviceName'])) {
            $model->deviceName = $map['DeviceName'];
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
        if (isset($map['Keywords'])) {
            $model->keywords = $map['Keywords'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['OnlineDate'])) {
            $model->onlineDate = $map['OnlineDate'];
        }
        if (isset($map['PhysicalSpaceId'])) {
            $model->physicalSpaceId = $map['PhysicalSpaceId'];
        }
        if (isset($map['SpaceName'])) {
            $model->spaceName = $map['SpaceName'];
        }

        return $model;
    }
}
