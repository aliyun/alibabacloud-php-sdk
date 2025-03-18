<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeNetworkAttributeResponseBody;

use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeNetworkAttributeResponseBody\cloudResources\cloudResourceSetType;
use AlibabaCloud\Tea\Model;

class cloudResources extends Model
{
    /**
     * @var cloudResourceSetType[]
     */
    public $cloudResourceSetType;
    protected $_name = [
        'cloudResourceSetType' => 'CloudResourceSetType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->cloudResourceSetType) {
            $res['CloudResourceSetType'] = [];
            if (null !== $this->cloudResourceSetType && \is_array($this->cloudResourceSetType)) {
                $n = 0;
                foreach ($this->cloudResourceSetType as $item) {
                    $res['CloudResourceSetType'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return cloudResources
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CloudResourceSetType'])) {
            if (!empty($map['CloudResourceSetType'])) {
                $model->cloudResourceSetType = [];
                $n = 0;
                foreach ($map['CloudResourceSetType'] as $item) {
                    $model->cloudResourceSetType[$n++] = null !== $item ? cloudResourceSetType::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
