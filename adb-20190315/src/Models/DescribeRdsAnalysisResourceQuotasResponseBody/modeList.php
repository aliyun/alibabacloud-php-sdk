<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models\DescribeRdsAnalysisResourceQuotasResponseBody;

use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeRdsAnalysisResourceQuotasResponseBody\modeList\mode;
use AlibabaCloud\Tea\Model;

class modeList extends Model
{
    /**
     * @var mode[]
     */
    public $mode;
    protected $_name = [
        'mode' => 'Mode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mode) {
            $res['Mode'] = [];
            if (null !== $this->mode && \is_array($this->mode)) {
                $n = 0;
                foreach ($this->mode as $item) {
                    $res['Mode'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return modeList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Mode'])) {
            if (!empty($map['Mode'])) {
                $model->mode = [];
                $n           = 0;
                foreach ($map['Mode'] as $item) {
                    $model->mode[$n++] = null !== $item ? mode::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
