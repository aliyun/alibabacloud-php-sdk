<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220926\Models;

use AlibabaCloud\Dara\Model;

class AddAnswerSampleRequest extends Model
{
    /**
     * @var string
     */
    public $libId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $sampleObject;

    /**
     * @var string
     */
    public $samples;
    protected $_name = [
        'libId' => 'LibId',
        'regionId' => 'RegionId',
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
        if (null !== $this->libId) {
            $res['LibId'] = $this->libId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['LibId'])) {
            $model->libId = $map['LibId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
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
