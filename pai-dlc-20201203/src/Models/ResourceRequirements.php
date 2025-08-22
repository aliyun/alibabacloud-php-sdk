<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Dara\Model;

class ResourceRequirements extends Model
{
    /**
     * @var string[]
     */
    public $limits;

    /**
     * @var string[]
     */
    public $requests;
    protected $_name = [
        'limits' => 'Limits',
        'requests' => 'Requests',
    ];

    public function validate()
    {
        if (\is_array($this->limits)) {
            Model::validateArray($this->limits);
        }
        if (\is_array($this->requests)) {
            Model::validateArray($this->requests);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->limits) {
            if (\is_array($this->limits)) {
                $res['Limits'] = [];
                foreach ($this->limits as $key1 => $value1) {
                    $res['Limits'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->requests) {
            if (\is_array($this->requests)) {
                $res['Requests'] = [];
                foreach ($this->requests as $key1 => $value1) {
                    $res['Requests'][$key1] = $value1;
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
        if (isset($map['Limits'])) {
            if (!empty($map['Limits'])) {
                $model->limits = [];
                foreach ($map['Limits'] as $key1 => $value1) {
                    $model->limits[$key1] = $value1;
                }
            }
        }

        if (isset($map['Requests'])) {
            if (!empty($map['Requests'])) {
                $model->requests = [];
                foreach ($map['Requests'] as $key1 => $value1) {
                    $model->requests[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
