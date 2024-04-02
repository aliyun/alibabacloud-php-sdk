<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20170823\Models\DescribeOssIncrementCheckSettingResponseBody;

use AlibabaCloud\Tea\Model;

class bucketConfigList extends Model
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

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'bucket'   => 'Bucket',
        'prefixes' => 'Prefixes',
        'selected' => 'Selected',
        'type'     => 'Type',
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
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return bucketConfigList
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
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
