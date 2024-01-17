<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160201\Models\DescribeApiDocResponseBody;

use AlibabaCloud\SDK\CloudAPI\V20160201\Models\DescribeApiDocResponseBody\sdkDemos\sdkDemo;
use AlibabaCloud\Tea\Model;

class sdkDemos extends Model
{
    /**
     * @var sdkDemo[]
     */
    public $sdkDemo;
    protected $_name = [
        'sdkDemo' => 'SdkDemo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sdkDemo) {
            $res['SdkDemo'] = [];
            if (null !== $this->sdkDemo && \is_array($this->sdkDemo)) {
                $n = 0;
                foreach ($this->sdkDemo as $item) {
                    $res['SdkDemo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sdkDemos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SdkDemo'])) {
            if (!empty($map['SdkDemo'])) {
                $model->sdkDemo = [];
                $n              = 0;
                foreach ($map['SdkDemo'] as $item) {
                    $model->sdkDemo[$n++] = null !== $item ? sdkDemo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
