<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\ListOTAJobByFirmwareResponseBody;

use AlibabaCloud\SDK\Iot\V20180120\Models\ListOTAJobByFirmwareResponseBody\data\simpleOTAJobInfo;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var simpleOTAJobInfo[]
     */
    public $simpleOTAJobInfo;
    protected $_name = [
        'simpleOTAJobInfo' => 'SimpleOTAJobInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->simpleOTAJobInfo) {
            $res['SimpleOTAJobInfo'] = [];
            if (null !== $this->simpleOTAJobInfo && \is_array($this->simpleOTAJobInfo)) {
                $n = 0;
                foreach ($this->simpleOTAJobInfo as $item) {
                    $res['SimpleOTAJobInfo'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['SimpleOTAJobInfo'])) {
            if (!empty($map['SimpleOTAJobInfo'])) {
                $model->simpleOTAJobInfo = [];
                $n                       = 0;
                foreach ($map['SimpleOTAJobInfo'] as $item) {
                    $model->simpleOTAJobInfo[$n++] = null !== $item ? simpleOTAJobInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
