<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\ListBranchesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ListBranchesResponseBody\branches\branch;

class branches extends Model
{
    /**
     * @var branch[]
     */
    public $branch;
    protected $_name = [
        'branch' => 'Branch',
    ];

    public function validate()
    {
        if (\is_array($this->branch)) {
            Model::validateArray($this->branch);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->branch) {
            if (\is_array($this->branch)) {
                $res['Branch'] = [];
                $n1 = 0;
                foreach ($this->branch as $item1) {
                    $res['Branch'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Branch'])) {
            if (!empty($map['Branch'])) {
                $model->branch = [];
                $n1 = 0;
                foreach ($map['Branch'] as $item1) {
                    $model->branch[$n1] = branch::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
