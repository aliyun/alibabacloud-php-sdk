<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ModelStudio\V20260210\Models\GetBillingOverviewRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ModelStudio\V20260210\Models\GetBillingOverviewRequest\filter\dimensions;

class filter extends Model
{
    /**
     * @var dimensions[]
     */
    public $dimensions;
    protected $_name = [
        'dimensions' => 'dimensions',
    ];

    public function validate()
    {
        if (\is_array($this->dimensions)) {
            Model::validateArray($this->dimensions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dimensions) {
            if (\is_array($this->dimensions)) {
                $res['dimensions'] = [];
                $n1 = 0;
                foreach ($this->dimensions as $item1) {
                    $res['dimensions'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['dimensions'])) {
            if (!empty($map['dimensions'])) {
                $model->dimensions = [];
                $n1 = 0;
                foreach ($map['dimensions'] as $item1) {
                    $model->dimensions[$n1] = dimensions::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
