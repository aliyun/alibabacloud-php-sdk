<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEnsNetLevelResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEnsNetLevelResponseBody\ensNetLevels\ensNetLevel;

class ensNetLevels extends Model
{
    /**
     * @var ensNetLevel[]
     */
    public $ensNetLevel;
    protected $_name = [
        'ensNetLevel' => 'EnsNetLevel',
    ];

    public function validate()
    {
        if (\is_array($this->ensNetLevel)) {
            Model::validateArray($this->ensNetLevel);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ensNetLevel) {
            if (\is_array($this->ensNetLevel)) {
                $res['EnsNetLevel'] = [];
                $n1 = 0;
                foreach ($this->ensNetLevel as $item1) {
                    $res['EnsNetLevel'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['EnsNetLevel'])) {
            if (!empty($map['EnsNetLevel'])) {
                $model->ensNetLevel = [];
                $n1 = 0;
                foreach ($map['EnsNetLevel'] as $item1) {
                    $model->ensNetLevel[$n1] = ensNetLevel::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
