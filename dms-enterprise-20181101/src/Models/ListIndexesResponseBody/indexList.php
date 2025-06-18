<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListIndexesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListIndexesResponseBody\indexList\index;

class indexList extends Model
{
    /**
     * @var index[]
     */
    public $index;
    protected $_name = [
        'index' => 'Index',
    ];

    public function validate()
    {
        if (\is_array($this->index)) {
            Model::validateArray($this->index);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->index) {
            if (\is_array($this->index)) {
                $res['Index'] = [];
                $n1 = 0;
                foreach ($this->index as $item1) {
                    $res['Index'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Index'])) {
            if (!empty($map['Index'])) {
                $model->index = [];
                $n1 = 0;
                foreach ($map['Index'] as $item1) {
                    $model->index[$n1] = index::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
