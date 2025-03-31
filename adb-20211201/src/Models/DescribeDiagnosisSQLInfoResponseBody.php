<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeDiagnosisSQLInfoResponseBody\stageInfos;

class DescribeDiagnosisSQLInfoResponseBody extends Model
{
    /**
     * @var string
     */
    public $diagnosisSQLInfo;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var stageInfos[]
     */
    public $stageInfos;
    protected $_name = [
        'diagnosisSQLInfo' => 'DiagnosisSQLInfo',
        'requestId' => 'RequestId',
        'stageInfos' => 'StageInfos',
    ];

    public function validate()
    {
        if (\is_array($this->stageInfos)) {
            Model::validateArray($this->stageInfos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->diagnosisSQLInfo) {
            $res['DiagnosisSQLInfo'] = $this->diagnosisSQLInfo;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->stageInfos) {
            if (\is_array($this->stageInfos)) {
                $res['StageInfos'] = [];
                $n1 = 0;
                foreach ($this->stageInfos as $item1) {
                    $res['StageInfos'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['DiagnosisSQLInfo'])) {
            $model->diagnosisSQLInfo = $map['DiagnosisSQLInfo'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['StageInfos'])) {
            if (!empty($map['StageInfos'])) {
                $model->stageInfos = [];
                $n1 = 0;
                foreach ($map['StageInfos'] as $item1) {
                    $model->stageInfos[$n1++] = stageInfos::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
