<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageSecurityScanCountResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $imageBaselineCount;

    /**
     * @var int
     */
    public $imageCveVulCount;

    /**
     * @var int
     */
    public $imageMaliciousFileCount;

    /**
     * @var int
     */
    public $imageScaVulCount;
    protected $_name = [
        'imageBaselineCount' => 'ImageBaselineCount',
        'imageCveVulCount' => 'ImageCveVulCount',
        'imageMaliciousFileCount' => 'ImageMaliciousFileCount',
        'imageScaVulCount' => 'ImageScaVulCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
