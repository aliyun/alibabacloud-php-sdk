<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videorecog\V20200320\Models\GenerateVideoCoverResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Videorecog\V20200320\Models\GenerateVideoCoverResponseBody\data\outputs;

class data extends Model
{
    /**
     * @var outputs[]
     */
    public $outputs;
    protected $_name = [
        'outputs' => 'Outputs',
    ];

    public function validate()
    {
        if (\is_array($this->outputs)) {
            Model::validateArray($this->outputs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->outputs) {
            if (\is_array($this->outputs)) {
                $res['Outputs'] = [];
                $n1 = 0;
                foreach ($this->outputs as $item1) {
                    $res['Outputs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Outputs'])) {
            if (!empty($map['Outputs'])) {
                $model->outputs = [];
                $n1 = 0;
                foreach ($map['Outputs'] as $item1) {
                    $model->outputs[$n1] = outputs::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
