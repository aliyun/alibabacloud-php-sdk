<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeHanaBackupPlansResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeHanaBackupPlansResponseBody\hanaBackupPlans\hanaBackupPlan;

class hanaBackupPlans extends Model
{
    /**
     * @var hanaBackupPlan[]
     */
    public $hanaBackupPlan;
    protected $_name = [
        'hanaBackupPlan' => 'HanaBackupPlan',
    ];

    public function validate()
    {
        if (\is_array($this->hanaBackupPlan)) {
            Model::validateArray($this->hanaBackupPlan);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->hanaBackupPlan) {
            if (\is_array($this->hanaBackupPlan)) {
                $res['HanaBackupPlan'] = [];
                $n1                    = 0;
                foreach ($this->hanaBackupPlan as $item1) {
                    $res['HanaBackupPlan'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['HanaBackupPlan'])) {
            if (!empty($map['HanaBackupPlan'])) {
                $model->hanaBackupPlan = [];
                $n1                    = 0;
                foreach ($map['HanaBackupPlan'] as $item1) {
                    $model->hanaBackupPlan[$n1++] = hanaBackupPlan::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
