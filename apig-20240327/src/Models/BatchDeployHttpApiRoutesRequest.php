<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Dara\Model;

class BatchDeployHttpApiRoutesRequest extends Model
{
    /**
     * @var bool
     */
    public $async;

    /**
     * @var bool
     */
    public $deployAll;

    /**
     * @var string[]
     */
    public $routeIds;
    protected $_name = [
        'async' => 'async',
        'deployAll' => 'deployAll',
        'routeIds' => 'routeIds',
    ];

    public function validate()
    {
        if (\is_array($this->routeIds)) {
            Model::validateArray($this->routeIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->async) {
            $res['async'] = $this->async;
        }

        if (null !== $this->deployAll) {
            $res['deployAll'] = $this->deployAll;
        }

        if (null !== $this->routeIds) {
            if (\is_array($this->routeIds)) {
                $res['routeIds'] = [];
                $n1 = 0;
                foreach ($this->routeIds as $item1) {
                    $res['routeIds'][$n1] = $item1;
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
        if (isset($map['async'])) {
            $model->async = $map['async'];
        }

        if (isset($map['deployAll'])) {
            $model->deployAll = $map['deployAll'];
        }

        if (isset($map['routeIds'])) {
            if (!empty($map['routeIds'])) {
                $model->routeIds = [];
                $n1 = 0;
                foreach ($map['routeIds'] as $item1) {
                    $model->routeIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
