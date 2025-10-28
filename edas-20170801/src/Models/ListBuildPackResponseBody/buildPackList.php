<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\ListBuildPackResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Edas\V20170801\Models\ListBuildPackResponseBody\buildPackList\buildPack;

class buildPackList extends Model
{
    /**
     * @var buildPack[]
     */
    public $buildPack;
    protected $_name = [
        'buildPack' => 'BuildPack',
    ];

    public function validate()
    {
        if (\is_array($this->buildPack)) {
            Model::validateArray($this->buildPack);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->buildPack) {
            if (\is_array($this->buildPack)) {
                $res['BuildPack'] = [];
                $n1 = 0;
                foreach ($this->buildPack as $item1) {
                    $res['BuildPack'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['BuildPack'])) {
            if (!empty($map['BuildPack'])) {
                $model->buildPack = [];
                $n1 = 0;
                foreach ($map['BuildPack'] as $item1) {
                    $model->buildPack[$n1] = buildPack::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
