<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Dara\Model;

class BatchDeleteHttpApiRoutesRequest extends Model
{
    /**
     * @var bool
     */
    public $deleteAll;

    /**
     * @var string[]
     */
    public $routeIds;
    protected $_name = [
        'deleteAll' => 'deleteAll',
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
        if (null !== $this->deleteAll) {
            $res['deleteAll'] = $this->deleteAll;
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
        if (isset($map['deleteAll'])) {
            $model->deleteAll = $map['deleteAll'];
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
