<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\CreateRetcodeAppResponseBody\retcodeAppDataBean;

use AlibabaCloud\Tea\Model;

class tags extends Model
{
    /**
     * @var \AlibabaCloud\SDK\ARMS\V20190808\Models\CreateRetcodeAppResponseBody\retcodeAppDataBean\tags\tags[]
     */
    public $tags;
    protected $_name = [
        'tags' => 'Tags',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tags) {
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? \AlibabaCloud\SDK\ARMS\V20190808\Models\CreateRetcodeAppResponseBody\retcodeAppDataBean\tags\tags::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
