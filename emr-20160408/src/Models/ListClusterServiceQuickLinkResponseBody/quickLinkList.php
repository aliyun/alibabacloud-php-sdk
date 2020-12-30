<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\ListClusterServiceQuickLinkResponseBody;

use AlibabaCloud\SDK\Emr\V20160408\Models\ListClusterServiceQuickLinkResponseBody\quickLinkList\quickLink;
use AlibabaCloud\Tea\Model;

class quickLinkList extends Model
{
    /**
     * @var quickLink[]
     */
    public $quickLink;
    protected $_name = [
        'quickLink' => 'QuickLink',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->quickLink) {
            $res['QuickLink'] = [];
            if (null !== $this->quickLink && \is_array($this->quickLink)) {
                $n = 0;
                foreach ($this->quickLink as $item) {
                    $res['QuickLink'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return quickLinkList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['QuickLink'])) {
            if (!empty($map['QuickLink'])) {
                $model->quickLink = [];
                $n                = 0;
                foreach ($map['QuickLink'] as $item) {
                    $model->quickLink[$n++] = null !== $item ? quickLink::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
