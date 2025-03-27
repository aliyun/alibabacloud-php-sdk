<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models\CreateServiceCronScalerRequest;

use AlibabaCloud\Dara\Model;

class scaleJobs extends Model
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $schedule;

    /**
     * @var int
     */
    public $targetSize;
    protected $_name = [
        'name' => 'Name',
        'schedule' => 'Schedule',
        'targetSize' => 'TargetSize',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->schedule) {
            $res['Schedule'] = $this->schedule;
        }

        if (null !== $this->targetSize) {
            $res['TargetSize'] = $this->targetSize;
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
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Schedule'])) {
            $model->schedule = $map['Schedule'];
        }

        if (isset($map['TargetSize'])) {
            $model->targetSize = $map['TargetSize'];
        }

        return $model;
    }
}
