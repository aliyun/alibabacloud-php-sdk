<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pvtz\V20180101\Models\DescribeTagsResponseBody;

use AlibabaCloud\Tea\Model;

class tags extends Model
{
    /**
     * @description The key of tag N added to the resource.
     *
     * @example env
     *
     * @var string
     */
    public $key;

    /**
     * @description The values of tags added to the resources.
     *
     * @var string[]
     */
    public $values;
    protected $_name = [
        'key'    => 'Key',
        'values' => 'Values',
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
        if (null !== $this->values) {
            $res['Values'] = $this->values;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tags
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['Values'])) {
            if (!empty($map['Values'])) {
                $model->values = $map['Values'];
            }
        }

        return $model;
    }
}
