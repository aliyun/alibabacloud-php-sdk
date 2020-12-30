<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models\DescribeAccessControlListAttributeResponseBody;

use AlibabaCloud\SDK\Slb\V20140515\Models\DescribeAccessControlListAttributeResponseBody\relatedListeners\relatedListener;
use AlibabaCloud\Tea\Model;

class relatedListeners extends Model
{
    /**
     * @var relatedListener[]
     */
    public $relatedListener;
    protected $_name = [
        'relatedListener' => 'RelatedListener',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->relatedListener) {
            $res['RelatedListener'] = [];
            if (null !== $this->relatedListener && \is_array($this->relatedListener)) {
                $n = 0;
                foreach ($this->relatedListener as $item) {
                    $res['RelatedListener'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return relatedListeners
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RelatedListener'])) {
            if (!empty($map['RelatedListener'])) {
                $model->relatedListener = [];
                $n                      = 0;
                foreach ($map['RelatedListener'] as $item) {
                    $model->relatedListener[$n++] = null !== $item ? relatedListener::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
