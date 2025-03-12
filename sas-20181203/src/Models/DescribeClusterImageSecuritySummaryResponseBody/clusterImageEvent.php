<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeClusterImageSecuritySummaryResponseBody;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeClusterImageSecuritySummaryResponseBody\clusterImageEvent\imageBaseline;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeClusterImageSecuritySummaryResponseBody\clusterImageEvent\imageCveVul;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeClusterImageSecuritySummaryResponseBody\clusterImageEvent\imageMaliciousFile;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeClusterImageSecuritySummaryResponseBody\clusterImageEvent\imageScaVul;
use AlibabaCloud\Tea\Model;

class clusterImageEvent extends Model
{
    /**
     * @description The information about image baseline risks.
     *
     * @var imageBaseline[]
     */
    public $imageBaseline;

    /**
     * @description The information about image system vulnerabilities.
     *
     * @var imageCveVul[]
     */
    public $imageCveVul;

    /**
     * @description The information about malicious image samples.
     *
     * @var imageMaliciousFile[]
     */
    public $imageMaliciousFile;

    /**
     * @description The information about image application vulnerabilities.
     *
     * @var imageScaVul[]
     */
    public $imageScaVul;
    protected $_name = [
        'imageBaseline'      => 'ImageBaseline',
        'imageCveVul'        => 'ImageCveVul',
        'imageMaliciousFile' => 'ImageMaliciousFile',
        'imageScaVul'        => 'ImageScaVul',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageBaseline) {
            $res['ImageBaseline'] = [];
            if (null !== $this->imageBaseline && \is_array($this->imageBaseline)) {
                $n = 0;
                foreach ($this->imageBaseline as $item) {
                    $res['ImageBaseline'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->imageCveVul) {
            $res['ImageCveVul'] = [];
            if (null !== $this->imageCveVul && \is_array($this->imageCveVul)) {
                $n = 0;
                foreach ($this->imageCveVul as $item) {
                    $res['ImageCveVul'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->imageMaliciousFile) {
            $res['ImageMaliciousFile'] = [];
            if (null !== $this->imageMaliciousFile && \is_array($this->imageMaliciousFile)) {
                $n = 0;
                foreach ($this->imageMaliciousFile as $item) {
                    $res['ImageMaliciousFile'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->imageScaVul) {
            $res['ImageScaVul'] = [];
            if (null !== $this->imageScaVul && \is_array($this->imageScaVul)) {
                $n = 0;
                foreach ($this->imageScaVul as $item) {
                    $res['ImageScaVul'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return clusterImageEvent
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageBaseline'])) {
            if (!empty($map['ImageBaseline'])) {
                $model->imageBaseline = [];
                $n                    = 0;
                foreach ($map['ImageBaseline'] as $item) {
                    $model->imageBaseline[$n++] = null !== $item ? imageBaseline::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ImageCveVul'])) {
            if (!empty($map['ImageCveVul'])) {
                $model->imageCveVul = [];
                $n                  = 0;
                foreach ($map['ImageCveVul'] as $item) {
                    $model->imageCveVul[$n++] = null !== $item ? imageCveVul::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ImageMaliciousFile'])) {
            if (!empty($map['ImageMaliciousFile'])) {
                $model->imageMaliciousFile = [];
                $n                         = 0;
                foreach ($map['ImageMaliciousFile'] as $item) {
                    $model->imageMaliciousFile[$n++] = null !== $item ? imageMaliciousFile::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ImageScaVul'])) {
            if (!empty($map['ImageScaVul'])) {
                $model->imageScaVul = [];
                $n                  = 0;
                foreach ($map['ImageScaVul'] as $item) {
                    $model->imageScaVul[$n++] = null !== $item ? imageScaVul::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
