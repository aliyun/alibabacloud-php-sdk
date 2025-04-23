<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeClusterResponseBody\clusterInfo;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeClusterResponseBody\clusterInfo\addOnsInfo\addOnsInfo;

class addOnsInfo extends Model
{
    /**
     * @var addOnsInfo[]
     */
    public $addOnsInfo;
    protected $_name = [
        'addOnsInfo' => 'AddOnsInfo',
    ];

    public function validate()
    {
        if (\is_array($this->addOnsInfo)) {
            Model::validateArray($this->addOnsInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->addOnsInfo) {
            if (\is_array($this->addOnsInfo)) {
                $res['AddOnsInfo'] = [];
                $n1 = 0;
                foreach ($this->addOnsInfo as $item1) {
                    $res['AddOnsInfo'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AddOnsInfo'])) {
            if (!empty($map['AddOnsInfo'])) {
                $model->addOnsInfo = [];
                $n1 = 0;
                foreach ($map['AddOnsInfo'] as $item1) {
                    $model->addOnsInfo[$n1++] = self::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
