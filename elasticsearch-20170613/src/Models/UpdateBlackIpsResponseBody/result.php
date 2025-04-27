<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UpdateBlackIpsResponseBody;

use AlibabaCloud\Dara\Model;

class result extends Model
{
    /**
     * @var string[]
     */
    public $esIPBlacklist;
    protected $_name = [
        'esIPBlacklist' => 'esIPBlacklist',
    ];

    public function validate()
    {
        if (\is_array($this->esIPBlacklist)) {
            Model::validateArray($this->esIPBlacklist);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->esIPBlacklist) {
            if (\is_array($this->esIPBlacklist)) {
                $res['esIPBlacklist'] = [];
                $n1 = 0;
                foreach ($this->esIPBlacklist as $item1) {
                    $res['esIPBlacklist'][$n1++] = $item1;
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
        if (isset($map['esIPBlacklist'])) {
            if (!empty($map['esIPBlacklist'])) {
                $model->esIPBlacklist = [];
                $n1 = 0;
                foreach ($map['esIPBlacklist'] as $item1) {
                    $model->esIPBlacklist[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
