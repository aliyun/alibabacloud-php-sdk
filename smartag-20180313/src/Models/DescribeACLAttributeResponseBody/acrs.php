<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeACLAttributeResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeACLAttributeResponseBody\acrs\acr;

class acrs extends Model
{
    /**
     * @var acr[]
     */
    public $acr;
    protected $_name = [
        'acr' => 'Acr',
    ];

    public function validate()
    {
        if (\is_array($this->acr)) {
            Model::validateArray($this->acr);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->acr) {
            if (\is_array($this->acr)) {
                $res['Acr'] = [];
                $n1 = 0;
                foreach ($this->acr as $item1) {
                    $res['Acr'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Acr'])) {
            if (!empty($map['Acr'])) {
                $model->acr = [];
                $n1 = 0;
                foreach ($map['Acr'] as $item1) {
                    $model->acr[$n1] = acr::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
