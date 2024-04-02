<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20170823\Models\DescribeOssStockStatusResponseBody;

use AlibabaCloud\Tea\Model;

class bucketList extends Model
{
    /**
     * @var string
     */
    public $bucket;

    /**
     * @var string[]
     */
    public $prefixes;

    /**
     * @var bool
     */
    public $selected;
    protected $_name = [
        'bucket'   => 'Bucket',
        'prefixes' => 'Prefixes',
        'selected' => 'Selected',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bucket) {
            $res['Bucket'] = $this->bucket;
        }
        if (null !== $this->prefixes) {
            $res['Prefixes'] = $this->prefixes;
        }
        if (null !== $this->selected) {
            $res['Selected'] = $this->selected;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return bucketList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Bucket'])) {
            $model->bucket = $map['Bucket'];
        }
        if (isset($map['Prefixes'])) {
            if (!empty($map['Prefixes'])) {
                $model->prefixes = $map['Prefixes'];
            }
        }
        if (isset($map['Selected'])) {
            $model->selected = $map['Selected'];
        }

        return $model;
    }
}
