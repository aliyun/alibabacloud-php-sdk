<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models\ListInstanceResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $channelType;

    /**
     * @var string
     */
    public $contactMail;

    /**
     * @var string
     */
    public $countryId;

    /**
     * @var string
     */
    public $custSpaceId;

    /**
     * @var string
     */
    public $facebookBmId;

    /**
     * @var string
     */
    public $instanceDescription;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $isvTerms;

    /**
     * @var string
     */
    public $officeAddress;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $resourceRegionId;

    /**
     * @var string
     */
    public $state;

    /**
     * @var string
     */
    public $submitTime;
    protected $_name = [
        'channelType' => 'ChannelType',
        'contactMail' => 'ContactMail',
        'countryId' => 'CountryId',
        'custSpaceId' => 'CustSpaceId',
        'facebookBmId' => 'FacebookBmId',
        'instanceDescription' => 'InstanceDescription',
        'instanceId' => 'InstanceId',
        'instanceName' => 'InstanceName',
        'isvTerms' => 'IsvTerms',
        'officeAddress' => 'OfficeAddress',
        'resourceGroupId' => 'ResourceGroupId',
        'resourceRegionId' => 'ResourceRegionId',
        'state' => 'State',
        'submitTime' => 'SubmitTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->channelType) {
            $res['ChannelType'] = $this->channelType;
        }

        if (null !== $this->contactMail) {
            $res['ContactMail'] = $this->contactMail;
        }

        if (null !== $this->countryId) {
            $res['CountryId'] = $this->countryId;
        }

        if (null !== $this->custSpaceId) {
            $res['CustSpaceId'] = $this->custSpaceId;
        }

        if (null !== $this->facebookBmId) {
            $res['FacebookBmId'] = $this->facebookBmId;
        }

        if (null !== $this->instanceDescription) {
            $res['InstanceDescription'] = $this->instanceDescription;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }

        if (null !== $this->isvTerms) {
            $res['IsvTerms'] = $this->isvTerms;
        }

        if (null !== $this->officeAddress) {
            $res['OfficeAddress'] = $this->officeAddress;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->resourceRegionId) {
            $res['ResourceRegionId'] = $this->resourceRegionId;
        }

        if (null !== $this->state) {
            $res['State'] = $this->state;
        }

        if (null !== $this->submitTime) {
            $res['SubmitTime'] = $this->submitTime;
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
        if (isset($map['ChannelType'])) {
            $model->channelType = $map['ChannelType'];
        }

        if (isset($map['ContactMail'])) {
            $model->contactMail = $map['ContactMail'];
        }

        if (isset($map['CountryId'])) {
            $model->countryId = $map['CountryId'];
        }

        if (isset($map['CustSpaceId'])) {
            $model->custSpaceId = $map['CustSpaceId'];
        }

        if (isset($map['FacebookBmId'])) {
            $model->facebookBmId = $map['FacebookBmId'];
        }

        if (isset($map['InstanceDescription'])) {
            $model->instanceDescription = $map['InstanceDescription'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }

        if (isset($map['IsvTerms'])) {
            $model->isvTerms = $map['IsvTerms'];
        }

        if (isset($map['OfficeAddress'])) {
            $model->officeAddress = $map['OfficeAddress'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['ResourceRegionId'])) {
            $model->resourceRegionId = $map['ResourceRegionId'];
        }

        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        if (isset($map['SubmitTime'])) {
            $model->submitTime = $map['SubmitTime'];
        }

        return $model;
    }
}
