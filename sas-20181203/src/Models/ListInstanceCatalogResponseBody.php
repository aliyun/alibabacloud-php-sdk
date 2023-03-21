<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\ListInstanceCatalogResponseBody\vendors;
use AlibabaCloud\Tea\Model;

class ListInstanceCatalogResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var vendors[]
     */
    public $vendors;
    protected $_name = [
        'requestId' => 'RequestId',
        'vendors'   => 'Vendors',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->vendors) {
            $res['Vendors'] = [];
            if (null !== $this->vendors && \is_array($this->vendors)) {
                $n = 0;
                foreach ($this->vendors as $item) {
                    $res['Vendors'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListInstanceCatalogResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Vendors'])) {
            if (!empty($map['Vendors'])) {
                $model->vendors = [];
                $n              = 0;
                foreach ($map['Vendors'] as $item) {
                    $model->vendors[$n++] = null !== $item ? vendors::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
