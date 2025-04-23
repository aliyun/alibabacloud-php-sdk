<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmInstancesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmInstancesResponseBody\gtmInstances\gtmInstance;

class gtmInstances extends Model
{
    /**
     * @var gtmInstance[]
     */
    public $gtmInstance;
    protected $_name = [
        'gtmInstance' => 'GtmInstance',
    ];

    public function validate()
    {
        if (\is_array($this->gtmInstance)) {
            Model::validateArray($this->gtmInstance);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->gtmInstance) {
            if (\is_array($this->gtmInstance)) {
                $res['GtmInstance'] = [];
                $n1 = 0;
                foreach ($this->gtmInstance as $item1) {
                    $res['GtmInstance'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['GtmInstance'])) {
            if (!empty($map['GtmInstance'])) {
                $model->gtmInstance = [];
                $n1 = 0;
                foreach ($map['GtmInstance'] as $item1) {
                    $model->gtmInstance[$n1++] = gtmInstance::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
