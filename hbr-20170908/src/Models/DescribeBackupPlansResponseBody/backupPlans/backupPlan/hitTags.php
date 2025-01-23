<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeBackupPlansResponseBody\backupPlans\backupPlan;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeBackupPlansResponseBody\backupPlans\backupPlan\hitTags\hitTag;

class hitTags extends Model
{
    /**
     * @var hitTag[]
     */
    public $hitTag;
    protected $_name = [
        'hitTag' => 'HitTag',
    ];

    public function validate()
    {
        if (\is_array($this->hitTag)) {
            Model::validateArray($this->hitTag);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->hitTag) {
            if (\is_array($this->hitTag)) {
                $res['HitTag'] = [];
                $n1            = 0;
                foreach ($this->hitTag as $item1) {
                    $res['HitTag'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['HitTag'])) {
            if (!empty($map['HitTag'])) {
                $model->hitTag = [];
                $n1            = 0;
                foreach ($map['HitTag'] as $item1) {
                    $model->hitTag[$n1++] = hitTag::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
