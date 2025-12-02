<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220926\Models;

use AlibabaCloud\Dara\Model;

class CreateAnswerLibRequest extends Model
{
    /**
     * @var string
     */
    public $libName;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $sampleBucket;

    /**
     * @var string
     */
    public $sampleObject;

    /**
     * @var string
     */
    public $samples;
    protected $_name = [
        'libName' => 'LibName',
        'regionId' => 'RegionId',
        'sampleBucket' => 'SampleBucket',
        'sampleObject' => 'SampleObject',
        'samples' => 'Samples',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->libName) {
            $res['LibName'] = $this->libName;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->sampleBucket) {
            $res['SampleBucket'] = $this->sampleBucket;
        }

        if (null !== $this->sampleObject) {
            $res['SampleObject'] = $this->sampleObject;
        }

        if (null !== $this->samples) {
            $res['Samples'] = $this->samples;
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
        if (isset($map['LibName'])) {
            $model->libName = $map['LibName'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['SampleBucket'])) {
            $model->sampleBucket = $map['SampleBucket'];
        }

        if (isset($map['SampleObject'])) {
            $model->sampleObject = $map['SampleObject'];
        }

        if (isset($map['Samples'])) {
            $model->samples = $map['Samples'];
        }

        return $model;
    }
}
