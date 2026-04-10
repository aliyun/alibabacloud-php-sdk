<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DianJin\V20240628\Models\GetUsageResponseBody\data;

use AlibabaCloud\Dara\Model;

class modelStats extends Model
{
    /**
     * @var int
     */
    public $inputUsage;

    /**
     * @var string
     */
    public $model;

    /**
     * @var int
     */
    public $outputUsage;

    /**
     * @var int
     */
    public $requests;

    /**
     * @var int
     */
    public $totalUsage;
    protected $_name = [
        'inputUsage' => 'inputUsage',
        'model' => 'model',
        'outputUsage' => 'outputUsage',
        'requests' => 'requests',
        'totalUsage' => 'totalUsage',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->inputUsage) {
            $res['inputUsage'] = $this->inputUsage;
        }

        if (null !== $this->model) {
            $res['model'] = $this->model;
        }

        if (null !== $this->outputUsage) {
            $res['outputUsage'] = $this->outputUsage;
        }

        if (null !== $this->requests) {
            $res['requests'] = $this->requests;
        }

        if (null !== $this->totalUsage) {
            $res['totalUsage'] = $this->totalUsage;
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
        if (isset($map['inputUsage'])) {
            $model->inputUsage = $map['inputUsage'];
        }

        if (isset($map['model'])) {
            $model->model = $map['model'];
        }

        if (isset($map['outputUsage'])) {
            $model->outputUsage = $map['outputUsage'];
        }

        if (isset($map['requests'])) {
            $model->requests = $map['requests'];
        }

        if (isset($map['totalUsage'])) {
            $model->totalUsage = $map['totalUsage'];
        }

        return $model;
    }
}
