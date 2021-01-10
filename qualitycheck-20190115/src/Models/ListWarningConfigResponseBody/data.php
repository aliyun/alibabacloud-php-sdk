<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListWarningConfigResponseBody;

use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListWarningConfigResponseBody\data\warningConfigInfo;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var warningConfigInfo[]
     */
    public $warningConfigInfo;
    protected $_name = [
        'warningConfigInfo' => 'WarningConfigInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->warningConfigInfo) {
            $res['WarningConfigInfo'] = [];
            if (null !== $this->warningConfigInfo && \is_array($this->warningConfigInfo)) {
                $n = 0;
                foreach ($this->warningConfigInfo as $item) {
                    $res['WarningConfigInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['WarningConfigInfo'])) {
            if (!empty($map['WarningConfigInfo'])) {
                $model->warningConfigInfo = [];
                $n                        = 0;
                foreach ($map['WarningConfigInfo'] as $item) {
                    $model->warningConfigInfo[$n++] = null !== $item ? warningConfigInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
