<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\DescribeCacheAnalysisJobResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\DAS\V20200116\Models\DescribeCacheAnalysisJobResponseBody\data\bigKeys\keyInfo;

class bigKeys extends Model
{
    /**
     * @var keyInfo[]
     */
    public $keyInfo;
    protected $_name = [
        'keyInfo' => 'KeyInfo',
    ];

    public function validate()
    {
        if (\is_array($this->keyInfo)) {
            Model::validateArray($this->keyInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->keyInfo) {
            if (\is_array($this->keyInfo)) {
                $res['KeyInfo'] = [];
                $n1 = 0;
                foreach ($this->keyInfo as $item1) {
                    $res['KeyInfo'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['KeyInfo'])) {
            if (!empty($map['KeyInfo'])) {
                $model->keyInfo = [];
                $n1 = 0;
                foreach ($map['KeyInfo'] as $item1) {
                    $model->keyInfo[$n1] = keyInfo::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
