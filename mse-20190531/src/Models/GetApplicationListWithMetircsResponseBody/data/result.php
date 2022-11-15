<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\GetApplicationListWithMetircsResponseBody\data;

use AlibabaCloud\SDK\Mse\V20190531\Models\GetApplicationListWithMetircsResponseBody\data\result\curMetrics;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetApplicationListWithMetircsResponseBody\data\result\curMetricsFm;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $appName;

    /**
     * @var curMetrics[]
     */
    public $curMetrics;

    /**
     * @var curMetricsFm
     */
    public $curMetricsFm;

    /**
     * @var string
     */
    public $extraInfo;

    /**
     * @var int
     */
    public $instancesNumber;

    /**
     * @var string
     */
    public $language;

    /**
     * @var string
     */
    public $licenseKey;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $source;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string[]
     */
    public $tags;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'appId'           => 'AppId',
        'appName'         => 'AppName',
        'curMetrics'      => 'CurMetrics',
        'curMetricsFm'    => 'CurMetricsFm',
        'extraInfo'       => 'ExtraInfo',
        'instancesNumber' => 'InstancesNumber',
        'language'        => 'Language',
        'licenseKey'      => 'LicenseKey',
        'regionId'        => 'RegionId',
        'source'          => 'Source',
        'status'          => 'Status',
        'tags'            => 'Tags',
        'userId'          => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->curMetrics) {
            $res['CurMetrics'] = [];
            if (null !== $this->curMetrics && \is_array($this->curMetrics)) {
                $n = 0;
                foreach ($this->curMetrics as $item) {
                    $res['CurMetrics'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->curMetricsFm) {
            $res['CurMetricsFm'] = null !== $this->curMetricsFm ? $this->curMetricsFm->toMap() : null;
        }
        if (null !== $this->extraInfo) {
            $res['ExtraInfo'] = $this->extraInfo;
        }
        if (null !== $this->instancesNumber) {
            $res['InstancesNumber'] = $this->instancesNumber;
        }
        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }
        if (null !== $this->licenseKey) {
            $res['LicenseKey'] = $this->licenseKey;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['CurMetrics'])) {
            if (!empty($map['CurMetrics'])) {
                $model->curMetrics = [];
                $n                 = 0;
                foreach ($map['CurMetrics'] as $item) {
                    $model->curMetrics[$n++] = null !== $item ? curMetrics::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['CurMetricsFm'])) {
            $model->curMetricsFm = curMetricsFm::fromMap($map['CurMetricsFm']);
        }
        if (isset($map['ExtraInfo'])) {
            $model->extraInfo = $map['ExtraInfo'];
        }
        if (isset($map['InstancesNumber'])) {
            $model->instancesNumber = $map['InstancesNumber'];
        }
        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }
        if (isset($map['LicenseKey'])) {
            $model->licenseKey = $map['LicenseKey'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = $map['Tags'];
            }
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
