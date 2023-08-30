<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\GetApplicationListWithMetircsResponseBody\data;

use AlibabaCloud\SDK\Mse\V20190531\Models\GetApplicationListWithMetircsResponseBody\data\result\curMetrics;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetApplicationListWithMetircsResponseBody\data\result\curMetricsFm;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description The ID of the application.
     *
     * @example daqijp6c31@xxx
     *
     * @var string
     */
    public $appId;

    /**
     * @description The name of the application.
     *
     * @example finance
     *
     * @var string
     */
    public $appName;

    /**
     * @example 2
     *
     * @var int
     */
    public $appType;

    /**
     * @description The current metrics.
     *
     * @var curMetrics[]
     */
    public $curMetrics;

    /**
     * @description The sum of metrics about the application.
     *
     * @var curMetricsFm
     */
    public $curMetricsFm;

    /**
     * @description The additional information.
     *
     * @example {}
     *
     * @var string
     */
    public $extraInfo;

    /**
     * @description The number of instances.
     *
     * @example 1
     *
     * @var int
     */
    public $instancesNumber;

    /**
     * @description The programming language of the application.
     *
     * @example JAVA
     *
     * @var string
     */
    public $language;

    /**
     * @example default
     *
     * @var string
     */
    public $namespace;

    /**
     * @description The ID of the region.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The source.
     *
     * @example edasmsc
     *
     * @var string
     */
    public $source;

    /**
     * @description The status.
     *
     * @example 0
     *
     * @var int
     */
    public $status;

    /**
     * @var int
     */
    public $tagCount;

    /**
     * @description The tags.
     *
     * @var string[]
     */
    public $tags;
    protected $_name = [
        'appId'           => 'AppId',
        'appName'         => 'AppName',
        'appType'         => 'AppType',
        'curMetrics'      => 'CurMetrics',
        'curMetricsFm'    => 'CurMetricsFm',
        'extraInfo'       => 'ExtraInfo',
        'instancesNumber' => 'InstancesNumber',
        'language'        => 'Language',
        'namespace'       => 'Namespace',
        'regionId'        => 'RegionId',
        'source'          => 'Source',
        'status'          => 'Status',
        'tagCount'        => 'TagCount',
        'tags'            => 'Tags',
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
        if (null !== $this->appType) {
            $res['AppType'] = $this->appType;
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
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
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
        if (null !== $this->tagCount) {
            $res['TagCount'] = $this->tagCount;
        }
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
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
        if (isset($map['AppType'])) {
            $model->appType = $map['AppType'];
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
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
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
        if (isset($map['TagCount'])) {
            $model->tagCount = $map['TagCount'];
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = $map['Tags'];
            }
        }

        return $model;
    }
}
