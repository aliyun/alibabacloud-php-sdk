<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\ListEnvCustomJobsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListEnvCustomJobsResponseBody\data\scrapeConfigs;

class data extends Model
{
    /**
     * @var string
     */
    public $addonName;
    /**
     * @var string
     */
    public $addonReleaseName;
    /**
     * @var string
     */
    public $addonVersion;
    /**
     * @var string
     */
    public $configYaml;
    /**
     * @var string
     */
    public $creationTimestamp;
    /**
     * @var string
     */
    public $customJobName;
    /**
     * @var string
     */
    public $environmentId;
    /**
     * @var string
     */
    public $regionId;
    /**
     * @var scrapeConfigs[]
     */
    public $scrapeConfigs;
    /**
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
        if (\is_array($this->scrapeConfigs)) {
            Model::validateArray($this->scrapeConfigs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->scrapeConfigs)) {
                $res['ScrapeConfigs'] = [];
                $n1                   = 0;
                foreach ($this->scrapeConfigs as $item1) {
                    $res['ScrapeConfigs'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
                $n1                   = 0;
                foreach ($map['ScrapeConfigs'] as $item1) {
                    $model->scrapeConfigs[$n1++] = scrapeConfigs::fromMap($item1);
                }
            }
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
