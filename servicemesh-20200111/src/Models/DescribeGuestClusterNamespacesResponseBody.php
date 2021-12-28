<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\Tea\Model;

class DescribeGuestClusterNamespacesResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $nsList;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'nsList'    => 'NsList',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nsList) {
            $res['NsList'] = $this->nsList;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeGuestClusterNamespacesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NsList'])) {
            if (!empty($map['NsList'])) {
                $model->nsList = $map['NsList'];
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
