<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ebs\V20210730\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ebs\V20210730\Models\CreateAppRequest\appTags;

class CreateAppRequest extends Model
{
    /**
     * @var string
     */
    public $appName;

    /**
     * @var appTags[]
     */
    public $appTags;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $owner;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var bool
     */
    public $reportSendEnabled;

    /**
     * @var string
     */
    public $subscribePeriod;

    /**
     * @var string
     */
    public $subscribeStatus;
    protected $_name = [
        'appName' => 'AppName',
        'appTags' => 'AppTags',
        'clientToken' => 'ClientToken',
        'description' => 'Description',
        'owner' => 'Owner',
        'regionId' => 'RegionId',
        'reportSendEnabled' => 'ReportSendEnabled',
        'subscribePeriod' => 'SubscribePeriod',
        'subscribeStatus' => 'SubscribeStatus',
    ];

    public function validate()
    {
        if (\is_array($this->appTags)) {
            Model::validateArray($this->appTags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }

        if (null !== $this->appTags) {
            if (\is_array($this->appTags)) {
                $res['AppTags'] = [];
                $n1 = 0;
                foreach ($this->appTags as $item1) {
                    $res['AppTags'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->reportSendEnabled) {
            $res['ReportSendEnabled'] = $this->reportSendEnabled;
        }

        if (null !== $this->subscribePeriod) {
            $res['SubscribePeriod'] = $this->subscribePeriod;
        }

        if (null !== $this->subscribeStatus) {
            $res['SubscribeStatus'] = $this->subscribeStatus;
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
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }

        if (isset($map['AppTags'])) {
            if (!empty($map['AppTags'])) {
                $model->appTags = [];
                $n1 = 0;
                foreach ($map['AppTags'] as $item1) {
                    $model->appTags[$n1] = appTags::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ReportSendEnabled'])) {
            $model->reportSendEnabled = $map['ReportSendEnabled'];
        }

        if (isset($map['SubscribePeriod'])) {
            $model->subscribePeriod = $map['SubscribePeriod'];
        }

        if (isset($map['SubscribeStatus'])) {
            $model->subscribeStatus = $map['SubscribeStatus'];
        }

        return $model;
    }
}
