<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\DescribeCacheAnalysisJobResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\DAS\V20200116\Models\DescribeCacheAnalysisJobResponseBody\data\expiryKeysLevelCount\expiryLevel;

class expiryKeysLevelCount extends Model
{
    /**
     * @var expiryLevel[]
     */
    public $expiryLevel;
    protected $_name = [
        'expiryLevel' => 'ExpiryLevel',
    ];

    public function validate()
    {
        if (\is_array($this->expiryLevel)) {
            Model::validateArray($this->expiryLevel);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->expiryLevel) {
            if (\is_array($this->expiryLevel)) {
                $res['ExpiryLevel'] = [];
                $n1 = 0;
                foreach ($this->expiryLevel as $item1) {
                    $res['ExpiryLevel'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ExpiryLevel'])) {
            if (!empty($map['ExpiryLevel'])) {
                $model->expiryLevel = [];
                $n1 = 0;
                foreach ($map['ExpiryLevel'] as $item1) {
                    $model->expiryLevel[$n1] = expiryLevel::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
