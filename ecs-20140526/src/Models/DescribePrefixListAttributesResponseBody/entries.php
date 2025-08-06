<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribePrefixListAttributesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribePrefixListAttributesResponseBody\entries\entry;

class entries extends Model
{
    /**
     * @var entry[]
     */
    public $entry;
    protected $_name = [
        'entry' => 'Entry',
    ];

    public function validate()
    {
        if (\is_array($this->entry)) {
            Model::validateArray($this->entry);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->entry) {
            if (\is_array($this->entry)) {
                $res['Entry'] = [];
                $n1 = 0;
                foreach ($this->entry as $item1) {
                    $res['Entry'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Entry'])) {
            if (!empty($map['Entry'])) {
                $model->entry = [];
                $n1 = 0;
                foreach ($map['Entry'] as $item1) {
                    $model->entry[$n1] = entry::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
