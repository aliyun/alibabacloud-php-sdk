<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetApprovalDetailResponseBody\approvalDetail;

use AlibabaCloud\Dara\Model;

class reasonList extends Model
{
    /**
     * @var string[]
     */
    public $reasons;
    protected $_name = [
        'reasons' => 'Reasons',
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
                $n1             = 0;
                foreach ($this->reasons as $item1) {
                    $res['Reasons'][$n1++] = $item1;
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
        if (isset($map['Reasons'])) {
            if (!empty($map['Reasons'])) {
                $model->reasons = [];
                $n1             = 0;
                foreach ($map['Reasons'] as $item1) {
                    $model->reasons[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
