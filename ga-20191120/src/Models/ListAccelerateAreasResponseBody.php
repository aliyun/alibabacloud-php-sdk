<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ga\V20191120\Models\ListAccelerateAreasResponseBody\areas;

class ListAccelerateAreasResponseBody extends Model
{
    /**
     * @var areas[]
     */
    public $areas;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'areas' => 'Areas',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->areas)) {
            Model::validateArray($this->areas);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->areas) {
            if (\is_array($this->areas)) {
                $res['Areas'] = [];
                $n1 = 0;
                foreach ($this->areas as $item1) {
                    $res['Areas'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['Areas'])) {
            if (!empty($map['Areas'])) {
                $model->areas = [];
                $n1 = 0;
                foreach ($map['Areas'] as $item1) {
                    $model->areas[$n1] = areas::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
