<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\GetEssayCorrectionTaskResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\GetEssayCorrectionTaskResponseBody\data\results;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\ModelUsage;

class data extends Model
{
    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var results[]
     */
    public $results;

    /**
     * @var string
     */
    public $status;

    /**
     * @var ModelUsage
     */
    public $totalUsage;
    protected $_name = [
        'errorMessage' => 'errorMessage',
        'results' => 'results',
        'status' => 'status',
        'totalUsage' => 'totalUsage',
    ];

    public function validate()
    {
        if (\is_array($this->results)) {
            Model::validateArray($this->results);
        }
        if (null !== $this->totalUsage) {
            $this->totalUsage->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->errorMessage) {
            $res['errorMessage'] = $this->errorMessage;
        }

        if (null !== $this->results) {
            if (\is_array($this->results)) {
                $res['results'] = [];
                $n1 = 0;
                foreach ($this->results as $item1) {
                    $res['results'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->totalUsage) {
            $res['totalUsage'] = null !== $this->totalUsage ? $this->totalUsage->toArray($noStream) : $this->totalUsage;
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
        if (isset($map['errorMessage'])) {
            $model->errorMessage = $map['errorMessage'];
        }

        if (isset($map['results'])) {
            if (!empty($map['results'])) {
                $model->results = [];
                $n1 = 0;
                foreach ($map['results'] as $item1) {
                    $model->results[$n1] = results::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['totalUsage'])) {
            $model->totalUsage = ModelUsage::fromMap($map['totalUsage']);
        }

        return $model;
    }
}
