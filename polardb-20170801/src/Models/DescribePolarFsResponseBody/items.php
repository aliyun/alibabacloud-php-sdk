<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribePolarFsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribePolarFsResponseBody\items\polarFsPaths;

class items extends Model
{
    /**
     * @var polarFsPaths[]
     */
    public $polarFsPaths;
    protected $_name = [
        'polarFsPaths' => 'PolarFsPaths',
    ];

    public function validate()
    {
        if (\is_array($this->polarFsPaths)) {
            Model::validateArray($this->polarFsPaths);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->polarFsPaths) {
            if (\is_array($this->polarFsPaths)) {
                $res['PolarFsPaths'] = [];
                $n1 = 0;
                foreach ($this->polarFsPaths as $item1) {
                    $res['PolarFsPaths'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['PolarFsPaths'])) {
            if (!empty($map['PolarFsPaths'])) {
                $model->polarFsPaths = [];
                $n1 = 0;
                foreach ($map['PolarFsPaths'] as $item1) {
                    $model->polarFsPaths[$n1] = polarFsPaths::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
