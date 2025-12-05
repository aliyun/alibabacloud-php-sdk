<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models\ListAliasesByKeyIdResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Kms\V20160120\Models\ListAliasesByKeyIdResponseBody\aliases\alias;

class aliases extends Model
{
    /**
     * @var alias[]
     */
    public $alias;
    protected $_name = [
        'alias' => 'Alias',
    ];

    public function validate()
    {
        if (\is_array($this->alias)) {
            Model::validateArray($this->alias);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alias) {
            if (\is_array($this->alias)) {
                $res['Alias'] = [];
                $n1 = 0;
                foreach ($this->alias as $item1) {
                    $res['Alias'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Alias'])) {
            if (!empty($map['Alias'])) {
                $model->alias = [];
                $n1 = 0;
                foreach ($map['Alias'] as $item1) {
                    $model->alias[$n1] = alias::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
