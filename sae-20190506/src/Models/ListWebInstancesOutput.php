<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Dara\Model;

class ListWebInstancesOutput extends Model
{
    /**
     * @var string
     */
    public $currentError;

    /**
     * @var WebInstanceInfo[]
     */
    public $webInstances;

    /**
     * @var WebVersionStatus[]
     */
    public $webVersionStatus;
    protected $_name = [
        'currentError' => 'CurrentError',
        'webInstances' => 'WebInstances',
        'webVersionStatus' => 'WebVersionStatus',
    ];

    public function validate()
    {
        if (\is_array($this->webInstances)) {
            Model::validateArray($this->webInstances);
        }
        if (\is_array($this->webVersionStatus)) {
            Model::validateArray($this->webVersionStatus);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->currentError) {
            $res['CurrentError'] = $this->currentError;
        }

        if (null !== $this->webInstances) {
            if (\is_array($this->webInstances)) {
                $res['WebInstances'] = [];
                $n1 = 0;
                foreach ($this->webInstances as $item1) {
                    $res['WebInstances'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->webVersionStatus) {
            if (\is_array($this->webVersionStatus)) {
                $res['WebVersionStatus'] = [];
                foreach ($this->webVersionStatus as $key1 => $value1) {
                    $res['WebVersionStatus'][$key1] = null !== $value1 ? $value1->toArray($noStream) : $value1;
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
        if (isset($map['CurrentError'])) {
            $model->currentError = $map['CurrentError'];
        }

        if (isset($map['WebInstances'])) {
            if (!empty($map['WebInstances'])) {
                $model->webInstances = [];
                $n1 = 0;
                foreach ($map['WebInstances'] as $item1) {
                    $model->webInstances[$n1] = WebInstanceInfo::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['WebVersionStatus'])) {
            if (!empty($map['WebVersionStatus'])) {
                $model->webVersionStatus = [];
                foreach ($map['WebVersionStatus'] as $key1 => $value1) {
                    $model->webVersionStatus[$key1] = WebVersionStatus::fromMap($value1);
                }
            }
        }

        return $model;
    }
}
