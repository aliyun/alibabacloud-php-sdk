<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AISC\V20260101\Models\ListSubTasksResponseBody\data\taskResultMessage\skillCheckResult\riskInfo\ext;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AISC\V20260101\Models\ListSubTasksResponseBody\data\taskResultMessage\skillCheckResult\riskInfo\ext\config\detail;

class config extends Model
{
    /**
     * @var detail[]
     */
    public $detail;
    protected $_name = [
        'detail' => 'Detail',
    ];

    public function validate()
    {
        if (\is_array($this->detail)) {
            Model::validateArray($this->detail);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->detail) {
            if (\is_array($this->detail)) {
                $res['Detail'] = [];
                $n1 = 0;
                foreach ($this->detail as $item1) {
                    $res['Detail'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Detail'])) {
            if (!empty($map['Detail'])) {
                $model->detail = [];
                $n1 = 0;
                foreach ($map['Detail'] as $item1) {
                    $model->detail[$n1] = detail::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
