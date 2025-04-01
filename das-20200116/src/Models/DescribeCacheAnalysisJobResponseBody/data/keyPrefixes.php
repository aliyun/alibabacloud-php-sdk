<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\DescribeCacheAnalysisJobResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\DAS\V20200116\Models\DescribeCacheAnalysisJobResponseBody\data\keyPrefixes\prefix;

class keyPrefixes extends Model
{
    /**
     * @var prefix[]
     */
    public $prefix;
    protected $_name = [
        'prefix' => 'Prefix',
    ];

    public function validate()
    {
        if (\is_array($this->prefix)) {
            Model::validateArray($this->prefix);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->prefix) {
            if (\is_array($this->prefix)) {
                $res['Prefix'] = [];
                $n1 = 0;
                foreach ($this->prefix as $item1) {
                    $res['Prefix'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Prefix'])) {
            if (!empty($map['Prefix'])) {
                $model->prefix = [];
                $n1 = 0;
                foreach ($map['Prefix'] as $item1) {
                    $model->prefix[$n1++] = prefix::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
