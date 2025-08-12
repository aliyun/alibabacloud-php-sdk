<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeHlsLiveStreamRealTimeBpsDataResponseBody\usageData;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeHlsLiveStreamRealTimeBpsDataResponseBody\usageData\streamInfos\infos;

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
        'infos' => 'Infos',
        'streamName' => 'StreamName',
    ];

    public function validate()
    {
        if (\is_array($this->infos)) {
            Model::validateArray($this->infos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->infos) {
            if (\is_array($this->infos)) {
                $res['Infos'] = [];
                $n1 = 0;
                foreach ($this->infos as $item1) {
                    $res['Infos'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->streamName) {
            $res['StreamName'] = $this->streamName;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Infos'])) {
            if (!empty($map['Infos'])) {
                $model->infos = [];
                $n1 = 0;
                foreach ($map['Infos'] as $item1) {
                    $model->infos[$n1] = infos::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['StreamName'])) {
            $model->streamName = $map['StreamName'];
        }

        return $model;
    }
}
