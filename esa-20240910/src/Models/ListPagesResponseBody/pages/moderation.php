<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\ListPagesResponseBody\pages;

use AlibabaCloud\Dara\Model;

class moderation extends Model
{
    /**
     * @var string[]
     */
    public $reasons;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'reasons' => 'Reasons',
        'status' => 'Status',
    ];

    public function validate()
    {
        if (\is_array($this->reasons)) {
            Model::validateArray($this->reasons);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->reasons) {
            if (\is_array($this->reasons)) {
                $res['Reasons'] = [];
                $n1 = 0;
                foreach ($this->reasons as $item1) {
                    $res['Reasons'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['Reasons'])) {
            if (!empty($map['Reasons'])) {
                $model->reasons = [];
                $n1 = 0;
                foreach ($map['Reasons'] as $item1) {
                    $model->reasons[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
