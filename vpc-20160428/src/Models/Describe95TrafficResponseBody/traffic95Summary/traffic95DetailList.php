<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\Describe95TrafficResponseBody\traffic95Summary;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vpc\V20160428\Models\Describe95TrafficResponseBody\traffic95Summary\traffic95DetailList\traffic95Detail;

class traffic95DetailList extends Model
{
    /**
     * @var traffic95Detail[]
     */
    public $traffic95Detail;
    protected $_name = [
        'traffic95Detail' => 'Traffic95Detail',
    ];

    public function validate()
    {
        if (\is_array($this->traffic95Detail)) {
            Model::validateArray($this->traffic95Detail);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->traffic95Detail) {
            if (\is_array($this->traffic95Detail)) {
                $res['Traffic95Detail'] = [];
                $n1 = 0;
                foreach ($this->traffic95Detail as $item1) {
                    $res['Traffic95Detail'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Traffic95Detail'])) {
            if (!empty($map['Traffic95Detail'])) {
                $model->traffic95Detail = [];
                $n1 = 0;
                foreach ($map['Traffic95Detail'] as $item1) {
                    $model->traffic95Detail[$n1++] = traffic95Detail::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
