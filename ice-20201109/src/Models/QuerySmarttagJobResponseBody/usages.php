<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\QuerySmarttagJobResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\QuerySmarttagJobResponseBody\usages\usage;

class usages extends Model
{
    /**
     * @var usage[]
     */
    public $usage;
    protected $_name = [
        'usage' => 'Usage',
    ];

    public function validate()
    {
        if (\is_array($this->usage)) {
            Model::validateArray($this->usage);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->usage) {
            if (\is_array($this->usage)) {
                $res['Usage'] = [];
                $n1 = 0;
                foreach ($this->usage as $item1) {
                    $res['Usage'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Usage'])) {
            if (!empty($map['Usage'])) {
                $model->usage = [];
                $n1 = 0;
                foreach ($map['Usage'] as $item1) {
                    $model->usage[$n1] = usage::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
