<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Market\V20151101\Models;

use AlibabaCloud\Dara\Model;

class DescribeDistributionProductsLinkRequest extends Model
{
    /**
     * @var string[]
     */
    public $codes;
    protected $_name = [
        'codes' => 'Codes',
    ];

    public function validate()
    {
        if (\is_array($this->codes)) {
            Model::validateArray($this->codes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->codes) {
            if (\is_array($this->codes)) {
                $res['Codes'] = [];
                $n1 = 0;
                foreach ($this->codes as $item1) {
                    $res['Codes'][$n1] = $item1;
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
        if (isset($map['Codes'])) {
            if (!empty($map['Codes'])) {
                $model->codes = [];
                $n1 = 0;
                foreach ($map['Codes'] as $item1) {
                    $model->codes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
