<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsuser\V20210308\Models;

use AlibabaCloud\SDK\Edsuser\V20210308\Models\DescribeOrgByLayerResponseBody\orgs;
use AlibabaCloud\Tea\Model;

class DescribeOrgByLayerResponseBody extends Model
{
    /**
     * @var orgs[]
     */
    public $orgs;

    /**
     * @example 1CBAFFAB-B697-4049-A9B1-67E1FC5F****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'orgs' => 'Orgs',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->orgs) {
            $res['Orgs'] = [];
            if (null !== $this->orgs && \is_array($this->orgs)) {
                $n = 0;
                foreach ($this->orgs as $item) {
                    $res['Orgs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeOrgByLayerResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Orgs'])) {
            if (!empty($map['Orgs'])) {
                $model->orgs = [];
                $n = 0;
                foreach ($map['Orgs'] as $item) {
                    $model->orgs[$n++] = null !== $item ? orgs::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
