<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models\DescribeServiceResponseBody;

use AlibabaCloud\SDK\Kms\V20160120\Models\DescribeServiceResponseBody\protectionLevels\protectionLevel;
use AlibabaCloud\Tea\Model;

class protectionLevels extends Model
{
    /**
     * @var protectionLevel[]
     */
    public $protectionLevel;
    protected $_name = [
        'protectionLevel' => 'ProtectionLevel',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->protectionLevel) {
            $res['ProtectionLevel'] = [];
            if (null !== $this->protectionLevel && \is_array($this->protectionLevel)) {
                $n = 0;
                foreach ($this->protectionLevel as $item) {
                    $res['ProtectionLevel'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return protectionLevels
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProtectionLevel'])) {
            if (!empty($map['ProtectionLevel'])) {
                $model->protectionLevel = [];
                $n                      = 0;
                foreach ($map['ProtectionLevel'] as $item) {
                    $model->protectionLevel[$n++] = null !== $item ? protectionLevel::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
