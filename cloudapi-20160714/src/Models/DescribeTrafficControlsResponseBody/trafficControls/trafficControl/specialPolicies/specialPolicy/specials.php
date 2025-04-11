<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeTrafficControlsResponseBody\trafficControls\trafficControl\specialPolicies\specialPolicy;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeTrafficControlsResponseBody\trafficControls\trafficControl\specialPolicies\specialPolicy\specials\special;

class specials extends Model
{
    /**
     * @var special[]
     */
    public $special;
    protected $_name = [
        'special' => 'Special',
    ];

    public function validate()
    {
        if (\is_array($this->special)) {
            Model::validateArray($this->special);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->special) {
            if (\is_array($this->special)) {
                $res['Special'] = [];
                $n1 = 0;
                foreach ($this->special as $item1) {
                    $res['Special'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Special'])) {
            if (!empty($map['Special'])) {
                $model->special = [];
                $n1 = 0;
                foreach ($map['Special'] as $item1) {
                    $model->special[$n1++] = special::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
