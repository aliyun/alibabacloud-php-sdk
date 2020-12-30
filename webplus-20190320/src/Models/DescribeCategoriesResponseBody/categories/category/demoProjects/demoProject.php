<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebPlus\V20190320\Models\DescribeCategoriesResponseBody\categories\category\demoProjects;

use AlibabaCloud\Tea\Model;

class demoProject extends Model
{
    /**
     * @var string
     */
    public $sourceUrl;

    /**
     * @var string
     */
    public $packageDownloadUrl;

    /**
     * @var string
     */
    public $packageUrl;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'sourceUrl'          => 'SourceUrl',
        'packageDownloadUrl' => 'PackageDownloadUrl',
        'packageUrl'         => 'PackageUrl',
        'regionId'           => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sourceUrl) {
            $res['SourceUrl'] = $this->sourceUrl;
        }
        if (null !== $this->packageDownloadUrl) {
            $res['PackageDownloadUrl'] = $this->packageDownloadUrl;
        }
        if (null !== $this->packageUrl) {
            $res['PackageUrl'] = $this->packageUrl;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return demoProject
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SourceUrl'])) {
            $model->sourceUrl = $map['SourceUrl'];
        }
        if (isset($map['PackageDownloadUrl'])) {
            $model->packageDownloadUrl = $map['PackageDownloadUrl'];
        }
        if (isset($map['PackageUrl'])) {
            $model->packageUrl = $map['PackageUrl'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
