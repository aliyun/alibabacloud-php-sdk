<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sgw\V20180511\Models\DescribeGatewaysTagsResponseBody;

use AlibabaCloud\SDK\Sgw\V20180511\Models\DescribeGatewaysTagsResponseBody\gatewayTags\gatewayTag;
use AlibabaCloud\Tea\Model;

class gatewayTags extends Model
{
    /**
     * @var gatewayTag[]
     */
    public $gatewayTag;
    protected $_name = [
        'gatewayTag' => 'GatewayTag',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gatewayTag) {
            $res['GatewayTag'] = [];
            if (null !== $this->gatewayTag && \is_array($this->gatewayTag)) {
                $n = 0;
                foreach ($this->gatewayTag as $item) {
                    $res['GatewayTag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return gatewayTags
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GatewayTag'])) {
            if (!empty($map['GatewayTag'])) {
                $model->gatewayTag = [];
                $n                 = 0;
                foreach ($map['GatewayTag'] as $item) {
                    $model->gatewayTag[$n++] = null !== $item ? gatewayTag::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
