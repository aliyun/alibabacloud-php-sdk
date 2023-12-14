<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sgw\V20180511\Models\DescribeGatewaysTagsResponseBody\gatewayTags;

use AlibabaCloud\SDK\Sgw\V20180511\Models\DescribeGatewaysTagsResponseBody\gatewayTags\gatewayTag\tags;
use AlibabaCloud\Tea\Model;

class gatewayTag extends Model
{
    /**
     * @var string
     */
    public $gatewayId;

    /**
     * @var tags
     */
    public $tags;
    protected $_name = [
        'gatewayId' => 'GatewayId',
        'tags'      => 'Tags',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gatewayId) {
            $res['GatewayId'] = $this->gatewayId;
        }
        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return gatewayTag
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GatewayId'])) {
            $model->gatewayId = $map['GatewayId'];
        }
        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }

        return $model;
    }
}
