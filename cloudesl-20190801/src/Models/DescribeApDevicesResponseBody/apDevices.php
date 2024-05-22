<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudesl\V20190801\Models\DescribeApDevicesResponseBody;

use AlibabaCloud\SDK\Cloudesl\V20190801\Models\DescribeApDevicesResponseBody\apDevices\apInfo;
use AlibabaCloud\Tea\Model;

class apDevices extends Model
{
    /**
     * @var apInfo[]
     */
    public $apInfo;
    protected $_name = [
        'apInfo' => 'ApInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apInfo) {
            $res['ApInfo'] = [];
            if (null !== $this->apInfo && \is_array($this->apInfo)) {
                $n = 0;
                foreach ($this->apInfo as $item) {
                    $res['ApInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return apDevices
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApInfo'])) {
            if (!empty($map['ApInfo'])) {
                $model->apInfo = [];
                $n             = 0;
                foreach ($map['ApInfo'] as $item) {
                    $model->apInfo[$n++] = null !== $item ? apInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
