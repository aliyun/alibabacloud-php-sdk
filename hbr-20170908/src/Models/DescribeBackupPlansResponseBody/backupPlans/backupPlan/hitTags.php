<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeBackupPlansResponseBody\backupPlans\backupPlan;

use AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeBackupPlansResponseBody\backupPlans\backupPlan\hitTags\hitTag;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hitTag) {
            $res['HitTag'] = [];
            if (null !== $this->hitTag && \is_array($this->hitTag)) {
                $n = 0;
                foreach ($this->hitTag as $item) {
                    $res['HitTag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return hitTags
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HitTag'])) {
            if (!empty($map['HitTag'])) {
                $model->hitTag = [];
                $n             = 0;
                foreach ($map['HitTag'] as $item) {
                    $model->hitTag[$n++] = null !== $item ? hitTag::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
