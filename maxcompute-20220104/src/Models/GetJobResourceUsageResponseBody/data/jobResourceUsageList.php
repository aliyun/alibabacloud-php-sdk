<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetJobResourceUsageResponseBody\data;

use AlibabaCloud\Dara\Model;

class jobResourceUsageList extends Model
{
    /**
     * @var int
     */
    public $cuUsage;
    /**
     * @var string
     */
    public $date;
    /**
     * @var string
     */
    public $jobOwner;
    /**
     * @var int
     */
    public $memoryUsage;
    /**
     * @var string
     */
    public $quotaNickname;
    protected $_name = [
        'cuUsage'       => 'cuUsage',
        'date'          => 'date',
        'jobOwner'      => 'jobOwner',
        'memoryUsage'   => 'memoryUsage',
        'quotaNickname' => 'quotaNickname',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cuUsage) {
            $res['cuUsage'] = $this->cuUsage;
        }

        if (null !== $this->date) {
            $res['date'] = $this->date;
        }

        if (null !== $this->jobOwner) {
            $res['jobOwner'] = $this->jobOwner;
        }

        if (null !== $this->memoryUsage) {
            $res['memoryUsage'] = $this->memoryUsage;
        }

        if (null !== $this->quotaNickname) {
            $res['quotaNickname'] = $this->quotaNickname;
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
        if (isset($map['cuUsage'])) {
            $model->cuUsage = $map['cuUsage'];
        }

        if (isset($map['date'])) {
            $model->date = $map['date'];
        }

        if (isset($map['jobOwner'])) {
            $model->jobOwner = $map['jobOwner'];
        }

        if (isset($map['memoryUsage'])) {
            $model->memoryUsage = $map['memoryUsage'];
        }

        if (isset($map['quotaNickname'])) {
            $model->quotaNickname = $map['quotaNickname'];
        }

        return $model;
    }
}
