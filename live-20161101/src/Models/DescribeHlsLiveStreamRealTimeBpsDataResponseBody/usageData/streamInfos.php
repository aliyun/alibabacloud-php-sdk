<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeHlsLiveStreamRealTimeBpsDataResponseBody\usageData;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeHlsLiveStreamRealTimeBpsDataResponseBody\usageData\streamInfos\infos;
use AlibabaCloud\Tea\Model;

class streamInfos extends Model
{
    /**
     * @var infos[]
     */
    public $infos;

    /**
     * @var string
     */
    public $streamName;
    protected $_name = [
        'infos'      => 'Infos',
        'streamName' => 'StreamName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->infos) {
            $res['Infos'] = [];
            if (null !== $this->infos && \is_array($this->infos)) {
                $n = 0;
                foreach ($this->infos as $item) {
                    $res['Infos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->streamName) {
            $res['StreamName'] = $this->streamName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return streamInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Infos'])) {
            if (!empty($map['Infos'])) {
                $model->infos = [];
                $n            = 0;
                foreach ($map['Infos'] as $item) {
                    $model->infos[$n++] = null !== $item ? infos::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['StreamName'])) {
            $model->streamName = $map['StreamName'];
        }

        return $model;
    }
}
