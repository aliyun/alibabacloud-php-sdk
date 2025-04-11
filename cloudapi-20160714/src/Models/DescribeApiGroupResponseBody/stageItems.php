<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiGroupResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiGroupResponseBody\stageItems\stageInfo;

class stageItems extends Model
{
    /**
     * @var stageInfo[]
     */
    public $stageInfo;
    protected $_name = [
        'stageInfo' => 'StageInfo',
    ];

    public function validate()
    {
        if (\is_array($this->stageInfo)) {
            Model::validateArray($this->stageInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->stageInfo) {
            if (\is_array($this->stageInfo)) {
                $res['StageInfo'] = [];
                $n1 = 0;
                foreach ($this->stageInfo as $item1) {
                    $res['StageInfo'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['StageInfo'])) {
            if (!empty($map['StageInfo'])) {
                $model->stageInfo = [];
                $n1 = 0;
                foreach ($map['StageInfo'] as $item1) {
                    $model->stageInfo[$n1++] = stageInfo::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
