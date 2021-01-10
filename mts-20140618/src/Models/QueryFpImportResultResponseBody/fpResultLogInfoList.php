<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryFpImportResultResponseBody;

use AlibabaCloud\SDK\Mts\V20140618\Models\QueryFpImportResultResponseBody\fpResultLogInfoList\fpResultLogInfo;
use AlibabaCloud\Tea\Model;

class fpResultLogInfoList extends Model
{
    /**
     * @var fpResultLogInfo[]
     */
    public $fpResultLogInfo;
    protected $_name = [
        'fpResultLogInfo' => 'FpResultLogInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fpResultLogInfo) {
            $res['FpResultLogInfo'] = [];
            if (null !== $this->fpResultLogInfo && \is_array($this->fpResultLogInfo)) {
                $n = 0;
                foreach ($this->fpResultLogInfo as $item) {
                    $res['FpResultLogInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return fpResultLogInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FpResultLogInfo'])) {
            if (!empty($map['FpResultLogInfo'])) {
                $model->fpResultLogInfo = [];
                $n                      = 0;
                foreach ($map['FpResultLogInfo'] as $item) {
                    $model->fpResultLogInfo[$n++] = null !== $item ? fpResultLogInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
