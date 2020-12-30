<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\DescribeClusterServiceConfigTagResponseBody;

use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeClusterServiceConfigTagResponseBody\configTagList\configTag;
use AlibabaCloud\Tea\Model;

class configTagList extends Model
{
    /**
     * @var configTag[]
     */
    public $configTag;
    protected $_name = [
        'configTag' => 'ConfigTag',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configTag) {
            $res['ConfigTag'] = [];
            if (null !== $this->configTag && \is_array($this->configTag)) {
                $n = 0;
                foreach ($this->configTag as $item) {
                    $res['ConfigTag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return configTagList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfigTag'])) {
            if (!empty($map['ConfigTag'])) {
                $model->configTag = [];
                $n                = 0;
                foreach ($map['ConfigTag'] as $item) {
                    $model->configTag[$n++] = null !== $item ? configTag::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
