<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Tea\Model;

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
        'currentError'     => 'CurrentError',
        'webInstances'     => 'WebInstances',
        'webVersionStatus' => 'WebVersionStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentError) {
            $res['CurrentError'] = $this->currentError;
        }
        if (null !== $this->webInstances) {
            $res['WebInstances'] = [];
            if (null !== $this->webInstances && \is_array($this->webInstances)) {
                $n = 0;
                foreach ($this->webInstances as $item) {
                    $res['WebInstances'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->webVersionStatus) {
            $res['WebVersionStatus'] = [];
            if (null !== $this->webVersionStatus && \is_array($this->webVersionStatus)) {
                foreach ($this->webVersionStatus as $key => $val) {
                    $res['WebVersionStatus'][$key] = null !== $val ? $val->toMap() : $val;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListWebInstancesOutput
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentError'])) {
            $model->currentError = $map['CurrentError'];
        }
        if (isset($map['WebInstances'])) {
            if (!empty($map['WebInstances'])) {
                $model->webInstances = [];
                $n                   = 0;
                foreach ($map['WebInstances'] as $item) {
                    $model->webInstances[$n++] = null !== $item ? WebInstanceInfo::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['WebVersionStatus'])) {
            $model->webVersionStatus = $map['WebVersionStatus'];
        }

        return $model;
    }
}
