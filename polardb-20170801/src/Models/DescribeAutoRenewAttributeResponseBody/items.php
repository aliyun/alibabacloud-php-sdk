<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeAutoRenewAttributeResponseBody;

use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeAutoRenewAttributeResponseBody\items\autoRenewAttribute;
use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @var autoRenewAttribute[]
     */
    public $autoRenewAttribute;
    protected $_name = [
        'autoRenewAttribute' => 'AutoRenewAttribute',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoRenewAttribute) {
            $res['AutoRenewAttribute'] = [];
            if (null !== $this->autoRenewAttribute && \is_array($this->autoRenewAttribute)) {
                $n = 0;
                foreach ($this->autoRenewAttribute as $item) {
                    $res['AutoRenewAttribute'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoRenewAttribute'])) {
            if (!empty($map['AutoRenewAttribute'])) {
                $model->autoRenewAttribute = [];
                $n = 0;
                foreach ($map['AutoRenewAttribute'] as $item) {
                    $model->autoRenewAttribute[$n++] = null !== $item ? autoRenewAttribute::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
