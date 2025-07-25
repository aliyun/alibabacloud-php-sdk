<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmInstancesResponseBody;

use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmInstancesResponseBody\gtmInstances\gtmInstance;
use AlibabaCloud\Tea\Model;

class gtmInstances extends Model
{
    /**
     * @var gtmInstance[]
     */
    public $gtmInstance;
    protected $_name = [
        'gtmInstance' => 'GtmInstance',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->gtmInstance) {
            $res['GtmInstance'] = [];
            if (null !== $this->gtmInstance && \is_array($this->gtmInstance)) {
                $n = 0;
                foreach ($this->gtmInstance as $item) {
                    $res['GtmInstance'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return gtmInstances
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GtmInstance'])) {
            if (!empty($map['GtmInstance'])) {
                $model->gtmInstance = [];
                $n = 0;
                foreach ($map['GtmInstance'] as $item) {
                    $model->gtmInstance[$n++] = null !== $item ? gtmInstance::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
