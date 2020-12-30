<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeSmartAccessGatewaysResponseBody\smartAccessGateways\smartAccessGateway;

use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeSmartAccessGatewaysResponseBody\smartAccessGateways\smartAccessGateway\links\link;
use AlibabaCloud\Tea\Model;

class links extends Model
{
    /**
     * @var link[]
     */
    public $link;
    protected $_name = [
        'link' => 'Link',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->link) {
            $res['Link'] = [];
            if (null !== $this->link && \is_array($this->link)) {
                $n = 0;
                foreach ($this->link as $item) {
                    $res['Link'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return links
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Link'])) {
            if (!empty($map['Link'])) {
                $model->link = [];
                $n           = 0;
                foreach ($map['Link'] as $item) {
                    $model->link[$n++] = null !== $item ? link::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
