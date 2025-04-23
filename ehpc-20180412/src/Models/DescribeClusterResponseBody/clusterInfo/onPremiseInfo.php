<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeClusterResponseBody\clusterInfo;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeClusterResponseBody\clusterInfo\onPremiseInfo\onPremiseInfo;

class onPremiseInfo extends Model
{
    /**
     * @var onPremiseInfo[]
     */
    public $onPremiseInfo;
    protected $_name = [
        'onPremiseInfo' => 'OnPremiseInfo',
    ];

    public function validate()
    {
        if (\is_array($this->onPremiseInfo)) {
            Model::validateArray($this->onPremiseInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->onPremiseInfo) {
            if (\is_array($this->onPremiseInfo)) {
                $res['OnPremiseInfo'] = [];
                $n1 = 0;
                foreach ($this->onPremiseInfo as $item1) {
                    $res['OnPremiseInfo'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['OnPremiseInfo'])) {
            if (!empty($map['OnPremiseInfo'])) {
                $model->onPremiseInfo = [];
                $n1 = 0;
                foreach ($map['OnPremiseInfo'] as $item1) {
                    $model->onPremiseInfo[$n1++] = self::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
