<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\ListScaleOutEcuResponseBody;

use AlibabaCloud\SDK\Edas\V20170801\Models\ListScaleOutEcuResponseBody\ecuInfoList\ecuInfo;
use AlibabaCloud\Tea\Model;

class ecuInfoList extends Model
{
    /**
     * @var ecuInfo[]
     */
    public $ecuInfo;
    protected $_name = [
        'ecuInfo' => 'EcuInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ecuInfo) {
            $res['EcuInfo'] = [];
            if (null !== $this->ecuInfo && \is_array($this->ecuInfo)) {
                $n = 0;
                foreach ($this->ecuInfo as $item) {
                    $res['EcuInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ecuInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EcuInfo'])) {
            if (!empty($map['EcuInfo'])) {
                $model->ecuInfo = [];
                $n              = 0;
                foreach ($map['EcuInfo'] as $item) {
                    $model->ecuInfo[$n++] = null !== $item ? ecuInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
