<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeSmartAccessGatewayVersionsResponseBody;

use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeSmartAccessGatewayVersionsResponseBody\smartAGVersions\smartAGVersion;
use AlibabaCloud\Tea\Model;

class smartAGVersions extends Model
{
    /**
     * @var smartAGVersion[]
     */
    public $smartAGVersion;
    protected $_name = [
        'smartAGVersion' => 'SmartAGVersion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->smartAGVersion) {
            $res['SmartAGVersion'] = [];
            if (null !== $this->smartAGVersion && \is_array($this->smartAGVersion)) {
                $n = 0;
                foreach ($this->smartAGVersion as $item) {
                    $res['SmartAGVersion'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return smartAGVersions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SmartAGVersion'])) {
            if (!empty($map['SmartAGVersion'])) {
                $model->smartAGVersion = [];
                $n                     = 0;
                foreach ($map['SmartAGVersion'] as $item) {
                    $model->smartAGVersion[$n++] = null !== $item ? smartAGVersion::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
