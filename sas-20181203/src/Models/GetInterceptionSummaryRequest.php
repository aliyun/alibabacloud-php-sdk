<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class GetInterceptionSummaryRequest extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string[]
     */
    public $excludeClusterTypes;
    protected $_name = [
        'clusterId' => 'ClusterId',
        'excludeClusterTypes' => 'ExcludeClusterTypes',
    ];

    public function validate()
    {
        if (\is_array($this->excludeClusterTypes)) {
            Model::validateArray($this->excludeClusterTypes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        if (null !== $this->excludeClusterTypes) {
            if (\is_array($this->excludeClusterTypes)) {
                $res['ExcludeClusterTypes'] = [];
                $n1 = 0;
                foreach ($this->excludeClusterTypes as $item1) {
                    $res['ExcludeClusterTypes'][$n1] = $item1;
                    ++$n1;
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
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        if (isset($map['ExcludeClusterTypes'])) {
            if (!empty($map['ExcludeClusterTypes'])) {
                $model->excludeClusterTypes = [];
                $n1 = 0;
                foreach ($map['ExcludeClusterTypes'] as $item1) {
                    $model->excludeClusterTypes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
