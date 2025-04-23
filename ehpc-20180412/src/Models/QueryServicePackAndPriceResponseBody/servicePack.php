<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\QueryServicePackAndPriceResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EHPC\V20180412\Models\QueryServicePackAndPriceResponseBody\servicePack\servicePackInfo;

class servicePack extends Model
{
    /**
     * @var servicePackInfo[]
     */
    public $servicePackInfo;
    protected $_name = [
        'servicePackInfo' => 'ServicePackInfo',
    ];

    public function validate()
    {
        if (\is_array($this->servicePackInfo)) {
            Model::validateArray($this->servicePackInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->servicePackInfo) {
            if (\is_array($this->servicePackInfo)) {
                $res['ServicePackInfo'] = [];
                $n1 = 0;
                foreach ($this->servicePackInfo as $item1) {
                    $res['ServicePackInfo'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ServicePackInfo'])) {
            if (!empty($map['ServicePackInfo'])) {
                $model->servicePackInfo = [];
                $n1 = 0;
                foreach ($map['ServicePackInfo'] as $item1) {
                    $model->servicePackInfo[$n1++] = servicePackInfo::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
