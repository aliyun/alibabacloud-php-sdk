<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\DescribeAddonMetricsResponseBody\data;

use AlibabaCloud\Tea\Model;

class labels extends Model
{
    /**
     * @description The description of the tag.
     *
     * @example The number of times a B-tree page of size PAGE_SIZE was successfully compressed.
     *
     * @var string
     */
    public $description;

    /**
     * @description The tag key.
     *
     * @example page_size
     *
     * @var string
     */
    public $key;

    /**
     * @description The source of the tag.
     *
     * @example db
     *
     * @var string
     */
    public $source;
    protected $_name = [
        'description' => 'Description',
        'key'         => 'Key',
        'source'      => 'Source',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return labels
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }

        return $model;
    }
}
