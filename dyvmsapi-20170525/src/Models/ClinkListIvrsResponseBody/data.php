<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ClinkListIvrsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ClinkListIvrsResponseBody\data\ivrs;

class data extends Model
{
    /**
     * @var string
     */
    public $clinkRequestId;

    /**
     * @var ivrs[]
     */
    public $ivrs;
    protected $_name = [
        'clinkRequestId' => 'ClinkRequestId',
        'ivrs' => 'Ivrs',
    ];

    public function validate()
    {
        if (\is_array($this->ivrs)) {
            Model::validateArray($this->ivrs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clinkRequestId) {
            $res['ClinkRequestId'] = $this->clinkRequestId;
        }

        if (null !== $this->ivrs) {
            if (\is_array($this->ivrs)) {
                $res['Ivrs'] = [];
                $n1 = 0;
                foreach ($this->ivrs as $item1) {
                    $res['Ivrs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ClinkRequestId'])) {
            $model->clinkRequestId = $map['ClinkRequestId'];
        }

        if (isset($map['Ivrs'])) {
            if (!empty($map['Ivrs'])) {
                $model->ivrs = [];
                $n1 = 0;
                foreach ($map['Ivrs'] as $item1) {
                    $model->ivrs[$n1] = ivrs::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
