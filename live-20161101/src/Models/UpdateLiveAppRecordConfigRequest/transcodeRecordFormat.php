<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\UpdateLiveAppRecordConfigRequest;

use AlibabaCloud\Dara\Model;

class transcodeRecordFormat extends Model
{
    /**
     * @var int
     */
    public $cycleDuration;

    /**
     * @var string
     */
    public $format;

    /**
     * @var int
     */
    public $sliceDuration;
    protected $_name = [
        'cycleDuration' => 'CycleDuration',
        'format' => 'Format',
        'sliceDuration' => 'SliceDuration',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cycleDuration) {
            $res['CycleDuration'] = $this->cycleDuration;
        }

        if (null !== $this->format) {
            $res['Format'] = $this->format;
        }

        if (null !== $this->sliceDuration) {
            $res['SliceDuration'] = $this->sliceDuration;
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
        if (isset($map['CycleDuration'])) {
            $model->cycleDuration = $map['CycleDuration'];
        }

        if (isset($map['Format'])) {
            $model->format = $map['Format'];
        }

        if (isset($map['SliceDuration'])) {
            $model->sliceDuration = $map['SliceDuration'];
        }

        return $model;
    }
}
