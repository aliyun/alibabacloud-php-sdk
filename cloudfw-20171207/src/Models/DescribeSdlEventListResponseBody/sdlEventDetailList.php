<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeSdlEventListResponseBody;

use AlibabaCloud\Dara\Model;

class sdlEventDetailList extends Model
{
    /**
     * @var string
     */
    public $assetName;

    /**
     * @var string
     */
    public $assetPrivateIp;

    /**
     * @var string
     */
    public $assetType;

    /**
     * @var string
     */
    public $categoryClassId;

    /**
     * @var string
     */
    public $categoryName;

    /**
     * @var string
     */
    public $cityId;

    /**
     * @var string
     */
    public $countryId;

    /**
     * @var string
     */
    public $dstIp;

    /**
     * @var string
     */
    public $dstPortList;

    /**
     * @var int
     */
    public $eventCnt;

    /**
     * @var string
     */
    public $eventLevel;

    /**
     * @var string
     */
    public $eventName;

    /**
     * @var int
     */
    public $firstTime;

    /**
     * @var int
     */
    public $lastTime;

    /**
     * @var string
     */
    public $locationName;

    /**
     * @var string
     */
    public $payload;

    /**
     * @var string
     */
    public $protoList;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceId;

    /**
     * @var int
     */
    public $resourceIdType;

    /**
     * @var int
     */
    public $sensitiveDataCnt;

    /**
     * @var string[]
     */
    public $sensitiveDataList;

    /**
     * @var string
     */
    public $sensitiveLevel;

    /**
     * @var string
     */
    public $sensitiveType;

    /**
     * @var string
     */
    public $srcIp;

    /**
     * @var string
     */
    public $srcPortList;

    /**
     * @var int
     */
    public $trafficBytes;

    /**
     * @var string
     */
    public $uuid;
    protected $_name = [
        'assetName' => 'AssetName',
        'assetPrivateIp' => 'AssetPrivateIp',
        'assetType' => 'AssetType',
        'categoryClassId' => 'CategoryClassId',
        'categoryName' => 'CategoryName',
        'cityId' => 'CityId',
        'countryId' => 'CountryId',
        'dstIp' => 'DstIp',
        'dstPortList' => 'DstPortList',
        'eventCnt' => 'EventCnt',
        'eventLevel' => 'EventLevel',
        'eventName' => 'EventName',
        'firstTime' => 'FirstTime',
        'lastTime' => 'LastTime',
        'locationName' => 'LocationName',
        'payload' => 'Payload',
        'protoList' => 'ProtoList',
        'regionId' => 'RegionId',
        'resourceId' => 'ResourceId',
        'resourceIdType' => 'ResourceIdType',
        'sensitiveDataCnt' => 'SensitiveDataCnt',
        'sensitiveDataList' => 'SensitiveDataList',
        'sensitiveLevel' => 'SensitiveLevel',
        'sensitiveType' => 'SensitiveType',
        'srcIp' => 'SrcIp',
        'srcPortList' => 'SrcPortList',
        'trafficBytes' => 'TrafficBytes',
        'uuid' => 'Uuid',
    ];

    public function validate()
    {
        if (\is_array($this->sensitiveDataList)) {
            Model::validateArray($this->sensitiveDataList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->assetName) {
            $res['AssetName'] = $this->assetName;
        }

        if (null !== $this->assetPrivateIp) {
            $res['AssetPrivateIp'] = $this->assetPrivateIp;
        }

        if (null !== $this->assetType) {
            $res['AssetType'] = $this->assetType;
        }

        if (null !== $this->categoryClassId) {
            $res['CategoryClassId'] = $this->categoryClassId;
        }

        if (null !== $this->categoryName) {
            $res['CategoryName'] = $this->categoryName;
        }

        if (null !== $this->cityId) {
            $res['CityId'] = $this->cityId;
        }

        if (null !== $this->countryId) {
            $res['CountryId'] = $this->countryId;
        }

        if (null !== $this->dstIp) {
            $res['DstIp'] = $this->dstIp;
        }

        if (null !== $this->dstPortList) {
            $res['DstPortList'] = $this->dstPortList;
        }

        if (null !== $this->eventCnt) {
            $res['EventCnt'] = $this->eventCnt;
        }

        if (null !== $this->eventLevel) {
            $res['EventLevel'] = $this->eventLevel;
        }

        if (null !== $this->eventName) {
            $res['EventName'] = $this->eventName;
        }

        if (null !== $this->firstTime) {
            $res['FirstTime'] = $this->firstTime;
        }

        if (null !== $this->lastTime) {
            $res['LastTime'] = $this->lastTime;
        }

        if (null !== $this->locationName) {
            $res['LocationName'] = $this->locationName;
        }

        if (null !== $this->payload) {
            $res['Payload'] = $this->payload;
        }

        if (null !== $this->protoList) {
            $res['ProtoList'] = $this->protoList;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }

        if (null !== $this->resourceIdType) {
            $res['ResourceIdType'] = $this->resourceIdType;
        }

        if (null !== $this->sensitiveDataCnt) {
            $res['SensitiveDataCnt'] = $this->sensitiveDataCnt;
        }

        if (null !== $this->sensitiveDataList) {
            if (\is_array($this->sensitiveDataList)) {
                $res['SensitiveDataList'] = [];
                $n1 = 0;
                foreach ($this->sensitiveDataList as $item1) {
                    $res['SensitiveDataList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->sensitiveLevel) {
            $res['SensitiveLevel'] = $this->sensitiveLevel;
        }

        if (null !== $this->sensitiveType) {
            $res['SensitiveType'] = $this->sensitiveType;
        }

        if (null !== $this->srcIp) {
            $res['SrcIp'] = $this->srcIp;
        }

        if (null !== $this->srcPortList) {
            $res['SrcPortList'] = $this->srcPortList;
        }

        if (null !== $this->trafficBytes) {
            $res['TrafficBytes'] = $this->trafficBytes;
        }

        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AssetName'])) {
            $model->assetName = $map['AssetName'];
        }

        if (isset($map['AssetPrivateIp'])) {
            $model->assetPrivateIp = $map['AssetPrivateIp'];
        }

        if (isset($map['AssetType'])) {
            $model->assetType = $map['AssetType'];
        }

        if (isset($map['CategoryClassId'])) {
            $model->categoryClassId = $map['CategoryClassId'];
        }

        if (isset($map['CategoryName'])) {
            $model->categoryName = $map['CategoryName'];
        }

        if (isset($map['CityId'])) {
            $model->cityId = $map['CityId'];
        }

        if (isset($map['CountryId'])) {
            $model->countryId = $map['CountryId'];
        }

        if (isset($map['DstIp'])) {
            $model->dstIp = $map['DstIp'];
        }

        if (isset($map['DstPortList'])) {
            $model->dstPortList = $map['DstPortList'];
        }

        if (isset($map['EventCnt'])) {
            $model->eventCnt = $map['EventCnt'];
        }

        if (isset($map['EventLevel'])) {
            $model->eventLevel = $map['EventLevel'];
        }

        if (isset($map['EventName'])) {
            $model->eventName = $map['EventName'];
        }

        if (isset($map['FirstTime'])) {
            $model->firstTime = $map['FirstTime'];
        }

        if (isset($map['LastTime'])) {
            $model->lastTime = $map['LastTime'];
        }

        if (isset($map['LocationName'])) {
            $model->locationName = $map['LocationName'];
        }

        if (isset($map['Payload'])) {
            $model->payload = $map['Payload'];
        }

        if (isset($map['ProtoList'])) {
            $model->protoList = $map['ProtoList'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }

        if (isset($map['ResourceIdType'])) {
            $model->resourceIdType = $map['ResourceIdType'];
        }

        if (isset($map['SensitiveDataCnt'])) {
            $model->sensitiveDataCnt = $map['SensitiveDataCnt'];
        }

        if (isset($map['SensitiveDataList'])) {
            if (!empty($map['SensitiveDataList'])) {
                $model->sensitiveDataList = [];
                $n1 = 0;
                foreach ($map['SensitiveDataList'] as $item1) {
                    $model->sensitiveDataList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['SensitiveLevel'])) {
            $model->sensitiveLevel = $map['SensitiveLevel'];
        }

        if (isset($map['SensitiveType'])) {
            $model->sensitiveType = $map['SensitiveType'];
        }

        if (isset($map['SrcIp'])) {
            $model->srcIp = $map['SrcIp'];
        }

        if (isset($map['SrcPortList'])) {
            $model->srcPortList = $map['SrcPortList'];
        }

        if (isset($map['TrafficBytes'])) {
            $model->trafficBytes = $map['TrafficBytes'];
        }

        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
