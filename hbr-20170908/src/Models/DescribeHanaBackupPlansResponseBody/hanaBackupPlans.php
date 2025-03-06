<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeHanaBackupPlansResponseBody;

use AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeHanaBackupPlansResponseBody\hanaBackupPlans\hanaBackupPlan;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hanaBackupPlan) {
            $res['HanaBackupPlan'] = [];
            if (null !== $this->hanaBackupPlan && \is_array($this->hanaBackupPlan)) {
                $n = 0;
                foreach ($this->hanaBackupPlan as $item) {
                    $res['HanaBackupPlan'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return hanaBackupPlans
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HanaBackupPlan'])) {
            if (!empty($map['HanaBackupPlan'])) {
                $model->hanaBackupPlan = [];
                $n                     = 0;
                foreach ($map['HanaBackupPlan'] as $item) {
                    $model->hanaBackupPlan[$n++] = null !== $item ? hanaBackupPlan::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
