<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mnsopen\V20220119\Models\GetEndpointAttributeResponseBody;

use AlibabaCloud\SDK\Mnsopen\V20220119\Models\GetEndpointAttributeResponseBody\data\cidrList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The list of CIDR block.
     *
     * @var cidrList[]
     */
    public $cidrList;

    /**
     * @description Specifies whether the endpoint is enabled.
     *
     * @example true
     *
     * @var bool
     */
    public $endpointEnabled;
    protected $_name = [
        'cidrList' => 'CidrList',
        'endpointEnabled' => 'EndpointEnabled',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->cidrList) {
            $res['CidrList'] = [];
            if (null !== $this->cidrList && \is_array($this->cidrList)) {
                $n = 0;
                foreach ($this->cidrList as $item) {
                    $res['CidrList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->endpointEnabled) {
            $res['EndpointEnabled'] = $this->endpointEnabled;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CidrList'])) {
            if (!empty($map['CidrList'])) {
                $model->cidrList = [];
                $n = 0;
                foreach ($map['CidrList'] as $item) {
                    $model->cidrList[$n++] = null !== $item ? cidrList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['EndpointEnabled'])) {
            $model->endpointEnabled = $map['EndpointEnabled'];
        }

        return $model;
    }
}
