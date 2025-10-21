<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RAI\V20240701\Models\BatchContentSyncDetectResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\RAI\V20240701\Models\BatchContentSyncDetectResponseBody\data\detectResultList;

class data extends Model
{
    /**
     * @var detectResultList[]
     */
    public $detectResultList;
    protected $_name = [
        'detectResultList' => 'DetectResultList',
    ];

    public function validate()
    {
        if (\is_array($this->detectResultList)) {
            Model::validateArray($this->detectResultList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->detectResultList) {
            if (\is_array($this->detectResultList)) {
                $res['DetectResultList'] = [];
                $n1 = 0;
                foreach ($this->detectResultList as $item1) {
                    $res['DetectResultList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['DetectResultList'])) {
            if (!empty($map['DetectResultList'])) {
                $model->detectResultList = [];
                $n1 = 0;
                foreach ($map['DetectResultList'] as $item1) {
                    $model->detectResultList[$n1] = detectResultList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
