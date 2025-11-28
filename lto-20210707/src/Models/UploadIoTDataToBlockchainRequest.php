<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Lto\V20210707\Models;

use AlibabaCloud\Dara\Model;

class UploadIoTDataToBlockchainRequest extends Model
{
    /**
     * @var string
     */
    public $iotAuthType;

    /**
     * @var string
     */
    public $iotDataDID;

    /**
     * @var string
     */
    public $iotDataDigest;

    /**
     * @var string
     */
    public $iotDataToken;

    /**
     * @var string
     */
    public $iotId;

    /**
     * @var string
     */
    public $iotIdServiceProvider;

    /**
     * @var string
     */
    public $iotIdSource;

    /**
     * @var string
     */
    public $plainData;

    /**
     * @var string
     */
    public $privacyData;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'iotAuthType' => 'IotAuthType',
        'iotDataDID' => 'IotDataDID',
        'iotDataDigest' => 'IotDataDigest',
        'iotDataToken' => 'IotDataToken',
        'iotId' => 'IotId',
        'iotIdServiceProvider' => 'IotIdServiceProvider',
        'iotIdSource' => 'IotIdSource',
        'plainData' => 'PlainData',
        'privacyData' => 'PrivacyData',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->iotAuthType) {
            $res['IotAuthType'] = $this->iotAuthType;
        }

        if (null !== $this->iotDataDID) {
            $res['IotDataDID'] = $this->iotDataDID;
        }

        if (null !== $this->iotDataDigest) {
            $res['IotDataDigest'] = $this->iotDataDigest;
        }

        if (null !== $this->iotDataToken) {
            $res['IotDataToken'] = $this->iotDataToken;
        }

        if (null !== $this->iotId) {
            $res['IotId'] = $this->iotId;
        }

        if (null !== $this->iotIdServiceProvider) {
            $res['IotIdServiceProvider'] = $this->iotIdServiceProvider;
        }

        if (null !== $this->iotIdSource) {
            $res['IotIdSource'] = $this->iotIdSource;
        }

        if (null !== $this->plainData) {
            $res['PlainData'] = $this->plainData;
        }

        if (null !== $this->privacyData) {
            $res['PrivacyData'] = $this->privacyData;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['IotAuthType'])) {
            $model->iotAuthType = $map['IotAuthType'];
        }

        if (isset($map['IotDataDID'])) {
            $model->iotDataDID = $map['IotDataDID'];
        }

        if (isset($map['IotDataDigest'])) {
            $model->iotDataDigest = $map['IotDataDigest'];
        }

        if (isset($map['IotDataToken'])) {
            $model->iotDataToken = $map['IotDataToken'];
        }

        if (isset($map['IotId'])) {
            $model->iotId = $map['IotId'];
        }

        if (isset($map['IotIdServiceProvider'])) {
            $model->iotIdServiceProvider = $map['IotIdServiceProvider'];
        }

        if (isset($map['IotIdSource'])) {
            $model->iotIdSource = $map['IotIdSource'];
        }

        if (isset($map['PlainData'])) {
            $model->plainData = $map['PlainData'];
        }

        if (isset($map['PrivacyData'])) {
            $model->privacyData = $map['PrivacyData'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
