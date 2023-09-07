<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\ListTagResourcesRequest;

use AlibabaCloud\Tea\Model;

class tag extends Model
{
    /**
     * @description The key of the tag. To query the details of clusters to which multiple tags are bound, click **Add** to add tags.
     *
     * >
     *
     *   You must specify at least one of the `ResourceId.N` and `Tag.N.Key` parameters.
     *
     *   If you specify the `Tag.N.Key` parameter, you can create up to 20 tags at a time.
     *
     * @example type
     *
     * @var string
     */
    public $key;

    /**
     * @description The tag value that is paired with the tag key. This parameter can be set to an empty string.
     *
     * @example test
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'key'   => 'Key',
        'value' => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tag
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
