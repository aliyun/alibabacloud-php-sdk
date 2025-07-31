<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220926\Models;

use AlibabaCloud\Tea\Model;

class AddAnswerSampleRequest extends Model
{
    /**
     * @example alxxxx
     *
     * @var string
     */
    public $libId;

    /**
     * @example cn-shanghai
     *
     * @var string
     */
    public $regionId;

    /**
     * @example data/xxx.xlsx
     *
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

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return AddAnswerSampleRequest
     */
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
