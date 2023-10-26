<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\ListEnvCustomJobsResponseBody;

use AlibabaCloud\SDK\ARMS\V20190808\Models\ListEnvCustomJobsResponseBody\data\scrapeConfigs;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The attributed component name.
     *
     * @example mysql
     *
     * @var string
     */
    public $addonName;

    /**
     * @description The attributed component instance name.
     *
     * @example mysql1
     *
     * @var string
     */
    public $addonReleaseName;

    /**
     * @description The attributed component version.
     *
     * @example 1.1.0
     *
     * @var string
     */
    public $addonVersion;

    /**
     * @description If the request parameter encryptYaml is true, the base64-encoded yaml string is returned. Otherwise, the plaintext yaml string is returned.
     *
     * @example `
     * `
     * @var string
     */
    public $configYaml;

    /**
     * @description Creation time (timestamp).
     *
     * @example 2022-01-01T10:11:34Z
     *
     * @var string
     */
    public $creationTimestamp;

    /**
     * @description Custom job name.
     *
     * @example job1
     *
     * @var string
     */
    public $customJobName;

    /**
     * @description Environment instance ID.
     *
     * @example env-xxxx
     *
     * @var string
     */
    public $environmentId;

    /**
     * @description The region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description scrape configuration.
     *
     * @var scrapeConfigs[]
     */
    public $scrapeConfigs;

    /**
     * @description state.
     *
     * @example run
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'addonName'         => 'AddonName',
        'addonReleaseName'  => 'AddonReleaseName',
        'addonVersion'      => 'AddonVersion',
        'configYaml'        => 'ConfigYaml',
        'creationTimestamp' => 'CreationTimestamp',
        'customJobName'     => 'CustomJobName',
        'environmentId'     => 'EnvironmentId',
        'regionId'          => 'RegionId',
        'scrapeConfigs'     => 'ScrapeConfigs',
        'status'            => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->addonName) {
            $res['AddonName'] = $this->addonName;
        }
        if (null !== $this->addonReleaseName) {
            $res['AddonReleaseName'] = $this->addonReleaseName;
        }
        if (null !== $this->addonVersion) {
            $res['AddonVersion'] = $this->addonVersion;
        }
        if (null !== $this->configYaml) {
            $res['ConfigYaml'] = $this->configYaml;
        }
        if (null !== $this->creationTimestamp) {
            $res['CreationTimestamp'] = $this->creationTimestamp;
        }
        if (null !== $this->customJobName) {
            $res['CustomJobName'] = $this->customJobName;
        }
        if (null !== $this->environmentId) {
            $res['EnvironmentId'] = $this->environmentId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->scrapeConfigs) {
            $res['ScrapeConfigs'] = [];
            if (null !== $this->scrapeConfigs && \is_array($this->scrapeConfigs)) {
                $n = 0;
                foreach ($this->scrapeConfigs as $item) {
                    $res['ScrapeConfigs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AddonName'])) {
            $model->addonName = $map['AddonName'];
        }
        if (isset($map['AddonReleaseName'])) {
            $model->addonReleaseName = $map['AddonReleaseName'];
        }
        if (isset($map['AddonVersion'])) {
            $model->addonVersion = $map['AddonVersion'];
        }
        if (isset($map['ConfigYaml'])) {
            $model->configYaml = $map['ConfigYaml'];
        }
        if (isset($map['CreationTimestamp'])) {
            $model->creationTimestamp = $map['CreationTimestamp'];
        }
        if (isset($map['CustomJobName'])) {
            $model->customJobName = $map['CustomJobName'];
        }
        if (isset($map['EnvironmentId'])) {
            $model->environmentId = $map['EnvironmentId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ScrapeConfigs'])) {
            if (!empty($map['ScrapeConfigs'])) {
                $model->scrapeConfigs = [];
                $n                    = 0;
                foreach ($map['ScrapeConfigs'] as $item) {
                    $model->scrapeConfigs[$n++] = null !== $item ? scrapeConfigs::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
