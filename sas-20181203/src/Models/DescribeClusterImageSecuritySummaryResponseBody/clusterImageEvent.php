<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeClusterImageSecuritySummaryResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeClusterImageSecuritySummaryResponseBody\clusterImageEvent\imageBaseline;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeClusterImageSecuritySummaryResponseBody\clusterImageEvent\imageCveVul;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeClusterImageSecuritySummaryResponseBody\clusterImageEvent\imageMaliciousFile;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeClusterImageSecuritySummaryResponseBody\clusterImageEvent\imageScaVul;

class clusterImageEvent extends Model
{
    /**
     * @var imageBaseline[]
     */
    public $imageBaseline;

    /**
     * @var imageCveVul[]
     */
    public $imageCveVul;

    /**
     * @var imageMaliciousFile[]
     */
    public $imageMaliciousFile;

    /**
     * @var imageScaVul[]
     */
    public $imageScaVul;
    protected $_name = [
        'imageBaseline' => 'ImageBaseline',
        'imageCveVul' => 'ImageCveVul',
        'imageMaliciousFile' => 'ImageMaliciousFile',
        'imageScaVul' => 'ImageScaVul',
    ];

    public function validate()
    {
        if (\is_array($this->imageBaseline)) {
            Model::validateArray($this->imageBaseline);
        }
        if (\is_array($this->imageCveVul)) {
            Model::validateArray($this->imageCveVul);
        }
        if (\is_array($this->imageMaliciousFile)) {
            Model::validateArray($this->imageMaliciousFile);
        }
        if (\is_array($this->imageScaVul)) {
            Model::validateArray($this->imageScaVul);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->imageBaseline) {
            if (\is_array($this->imageBaseline)) {
                $res['ImageBaseline'] = [];
                $n1 = 0;
                foreach ($this->imageBaseline as $item1) {
                    $res['ImageBaseline'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->imageCveVul) {
            if (\is_array($this->imageCveVul)) {
                $res['ImageCveVul'] = [];
                $n1 = 0;
                foreach ($this->imageCveVul as $item1) {
                    $res['ImageCveVul'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->imageMaliciousFile) {
            if (\is_array($this->imageMaliciousFile)) {
                $res['ImageMaliciousFile'] = [];
                $n1 = 0;
                foreach ($this->imageMaliciousFile as $item1) {
                    $res['ImageMaliciousFile'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->imageScaVul) {
            if (\is_array($this->imageScaVul)) {
                $res['ImageScaVul'] = [];
                $n1 = 0;
                foreach ($this->imageScaVul as $item1) {
                    $res['ImageScaVul'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['ImageBaseline'])) {
            if (!empty($map['ImageBaseline'])) {
                $model->imageBaseline = [];
                $n1 = 0;
                foreach ($map['ImageBaseline'] as $item1) {
                    $model->imageBaseline[$n1] = imageBaseline::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ImageCveVul'])) {
            if (!empty($map['ImageCveVul'])) {
                $model->imageCveVul = [];
                $n1 = 0;
                foreach ($map['ImageCveVul'] as $item1) {
                    $model->imageCveVul[$n1] = imageCveVul::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ImageMaliciousFile'])) {
            if (!empty($map['ImageMaliciousFile'])) {
                $model->imageMaliciousFile = [];
                $n1 = 0;
                foreach ($map['ImageMaliciousFile'] as $item1) {
                    $model->imageMaliciousFile[$n1] = imageMaliciousFile::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ImageScaVul'])) {
            if (!empty($map['ImageScaVul'])) {
                $model->imageScaVul = [];
                $n1 = 0;
                foreach ($map['ImageScaVul'] as $item1) {
                    $model->imageScaVul[$n1] = imageScaVul::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
