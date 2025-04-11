<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeAppsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeAppsResponseBody\apps\appItem;

class apps extends Model
{
    /**
     * @var appItem[]
     */
    public $appItem;
    protected $_name = [
        'appItem' => 'AppItem',
    ];

    public function validate()
    {
        if (\is_array($this->appItem)) {
            Model::validateArray($this->appItem);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appItem) {
            if (\is_array($this->appItem)) {
                $res['AppItem'] = [];
                $n1 = 0;
                foreach ($this->appItem as $item1) {
                    $res['AppItem'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppItem'])) {
            if (!empty($map['AppItem'])) {
                $model->appItem = [];
                $n1 = 0;
                foreach ($map['AppItem'] as $item1) {
                    $model->appItem[$n1++] = appItem::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
