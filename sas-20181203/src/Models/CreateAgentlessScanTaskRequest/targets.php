<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\CreateAgentlessScanTaskRequest;

use AlibabaCloud\Dara\Model;

class targets extends Model
{
    /**
     * @var string
     */
    public $imageId;

    /**
     * @var string
     */
    public $originImageName;

    /**
     * @var string
     */
    public $outputImageName;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string[]
     */
    public $vulnerabilityIds;
    protected $_name = [
        'imageId' => 'ImageId',
        'originImageName' => 'OriginImageName',
        'outputImageName' => 'OutputImageName',
        'regionId' => 'RegionId',
        'vulnerabilityIds' => 'VulnerabilityIds',
    ];

    public function validate()
    {
        if (\is_array($this->vulnerabilityIds)) {
            Model::validateArray($this->vulnerabilityIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }

        if (null !== $this->originImageName) {
            $res['OriginImageName'] = $this->originImageName;
        }

        if (null !== $this->outputImageName) {
            $res['OutputImageName'] = $this->outputImageName;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->vulnerabilityIds) {
            if (\is_array($this->vulnerabilityIds)) {
                $res['VulnerabilityIds'] = [];
                $n1 = 0;
                foreach ($this->vulnerabilityIds as $item1) {
                    $res['VulnerabilityIds'][$n1] = $item1;
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
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }

        if (isset($map['OriginImageName'])) {
            $model->originImageName = $map['OriginImageName'];
        }

        if (isset($map['OutputImageName'])) {
            $model->outputImageName = $map['OutputImageName'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['VulnerabilityIds'])) {
            if (!empty($map['VulnerabilityIds'])) {
                $model->vulnerabilityIds = [];
                $n1 = 0;
                foreach ($map['VulnerabilityIds'] as $item1) {
                    $model->vulnerabilityIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
