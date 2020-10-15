<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEnsNetLevelResponse;

use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEnsNetLevelResponse\ensNetLevels\ensNetLevel;
use AlibabaCloud\Tea\Model;

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
        Model::validateRequired('ensNetLevel', $this->ensNetLevel, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ensNetLevel) {
            $res['EnsNetLevel'] = [];
            if (null !== $this->ensNetLevel && \is_array($this->ensNetLevel)) {
                $n = 0;
                foreach ($this->ensNetLevel as $item) {
                    $res['EnsNetLevel'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ensNetLevels
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EnsNetLevel'])) {
            if (!empty($map['EnsNetLevel'])) {
                $model->ensNetLevel = [];
                $n                  = 0;
                foreach ($map['EnsNetLevel'] as $item) {
                    $model->ensNetLevel[$n++] = null !== $item ? ensNetLevel::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
