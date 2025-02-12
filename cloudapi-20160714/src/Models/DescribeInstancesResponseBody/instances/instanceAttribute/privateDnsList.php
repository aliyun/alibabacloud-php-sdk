<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeInstancesResponseBody\instances\instanceAttribute;

use AlibabaCloud\Dara\Model;

class privateDnsList extends Model
{
    /**
     * @var string[]
     */
    public $privateDns;
    protected $_name = [
        'privateDns' => 'PrivateDns',
    ];

    public function validate()
    {
        if (\is_array($this->privateDns)) {
            Model::validateArray($this->privateDns);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->privateDns) {
            if (\is_array($this->privateDns)) {
                $res['PrivateDns'] = [];
                $n1                = 0;
                foreach ($this->privateDns as $item1) {
                    $res['PrivateDns'][$n1++] = $item1;
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
        if (isset($map['PrivateDns'])) {
            if (!empty($map['PrivateDns'])) {
                $model->privateDns = [];
                $n1                = 0;
                foreach ($map['PrivateDns'] as $item1) {
                    $model->privateDns[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
