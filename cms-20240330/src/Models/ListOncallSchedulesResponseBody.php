<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListOncallSchedulesResponseBody\oncallSchedules;

class ListOncallSchedulesResponseBody extends Model
{
    /**
     * @var oncallSchedules[]
     */
    public $oncallSchedules;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'oncallSchedules' => 'oncallSchedules',
        'requestId' => 'requestId',
        'total' => 'total',
    ];

    public function validate()
    {
        if (\is_array($this->oncallSchedules)) {
            Model::validateArray($this->oncallSchedules);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->oncallSchedules) {
            if (\is_array($this->oncallSchedules)) {
                $res['oncallSchedules'] = [];
                $n1 = 0;
                foreach ($this->oncallSchedules as $item1) {
                    $res['oncallSchedules'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->total) {
            $res['total'] = $this->total;
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
        if (isset($map['oncallSchedules'])) {
            if (!empty($map['oncallSchedules'])) {
                $model->oncallSchedules = [];
                $n1 = 0;
                foreach ($map['oncallSchedules'] as $item1) {
                    $model->oncallSchedules[$n1] = oncallSchedules::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['total'])) {
            $model->total = $map['total'];
        }

        return $model;
    }
}
