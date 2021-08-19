<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models\BeautifyBodyAdvanceRequest;

use AlibabaCloud\SDK\Facebody\V20191230\Models\BeautifyBodyAdvanceRequest\poseList\pose;
use AlibabaCloud\Tea\Model;

class poseList extends Model
{
    /**
     * @var pose[]
     */
    public $pose;
    protected $_name = [
        'pose' => 'Pose',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pose) {
            $res['Pose'] = [];
            if (null !== $this->pose && \is_array($this->pose)) {
                $n = 0;
                foreach ($this->pose as $item) {
                    $res['Pose'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return poseList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Pose'])) {
            if (!empty($map['Pose'])) {
                $model->pose = [];
                $n           = 0;
                foreach ($map['Pose'] as $item) {
                    $model->pose[$n++] = null !== $item ? pose::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
