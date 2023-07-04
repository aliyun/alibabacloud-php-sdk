<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeTagKeysForExpressConnectResponseBody\tagKeys;

use AlibabaCloud\Tea\Model;

class tagKey extends Model
{
    /**
     * @description The tag key.
     *
     * @example FinanceDept
     *
     * @var string
     */
    public $tagKey;

    /**
     * @description The type of the resource. The value is set to **PHYSICALCONNECTION**, which indicates an Express Connect circuit.
     *
     * @example PHYSICALCONNECTION
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'tagKey' => 'TagKey',
        'type'   => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tagKey) {
            $res['TagKey'] = $this->tagKey;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tagKey
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TagKey'])) {
            $model->tagKey = $map['TagKey'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
