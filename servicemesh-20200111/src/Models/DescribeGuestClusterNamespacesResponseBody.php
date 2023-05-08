<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\Tea\Model;

class DescribeGuestClusterNamespacesResponseBody extends Model
{
    /**
     * @description The labels of the namespaces. Labels are returned only when the `ShowNsLabels` parameter is set to `true`.
     *
     * @example {"default":{"istio-injection":"enabled"}}
     *
     * @var mixed[]
     */
    public $nsLabels;

    /**
     * @description The names of the namespaces.
     *
     * @var string[]
     */
    public $nsList;

    /**
     * @description The ID of the request.
     *
     * @example 31d3a0f0-07ed-4f6e-9004-1804498c****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'nsLabels'  => 'NsLabels',
        'nsList'    => 'NsList',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nsLabels) {
            $res['NsLabels'] = $this->nsLabels;
        }
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
        if (isset($map['NsLabels'])) {
            $model->nsLabels = $map['NsLabels'];
        }
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
