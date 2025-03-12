<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageSecurityScanCountResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description Number of image baseline risk points in the current asset.
     *
     * @example 0
     *
     * @var int
     */
    public $imageBaselineCount;

    /**
     * @description Number of cve vulnerabilities in the current page.
     *
     * @example 0
     *
     * @var int
     */
    public $imageCveVulCount;

    /**
     * @description Number of malicious samples in the current page.
     *
     * @example 0
     *
     * @var int
     */
    public $imageMaliciousFileCount;

    /**
     * @description Number of sca vulnerabilities in the current page.
     *
     * @example 0
     *
     * @var int
     */
    public $imageScaVulCount;
    protected $_name = [
        'imageBaselineCount'      => 'ImageBaselineCount',
        'imageCveVulCount'        => 'ImageCveVulCount',
        'imageMaliciousFileCount' => 'ImageMaliciousFileCount',
        'imageScaVulCount'        => 'ImageScaVulCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageBaselineCount) {
            $res['ImageBaselineCount'] = $this->imageBaselineCount;
        }
        if (null !== $this->imageCveVulCount) {
            $res['ImageCveVulCount'] = $this->imageCveVulCount;
        }
        if (null !== $this->imageMaliciousFileCount) {
            $res['ImageMaliciousFileCount'] = $this->imageMaliciousFileCount;
        }
        if (null !== $this->imageScaVulCount) {
            $res['ImageScaVulCount'] = $this->imageScaVulCount;
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
        if (isset($map['ImageBaselineCount'])) {
            $model->imageBaselineCount = $map['ImageBaselineCount'];
        }
        if (isset($map['ImageCveVulCount'])) {
            $model->imageCveVulCount = $map['ImageCveVulCount'];
        }
        if (isset($map['ImageMaliciousFileCount'])) {
            $model->imageMaliciousFileCount = $map['ImageMaliciousFileCount'];
        }
        if (isset($map['ImageScaVulCount'])) {
            $model->imageScaVulCount = $map['ImageScaVulCount'];
        }

        return $model;
    }
}
