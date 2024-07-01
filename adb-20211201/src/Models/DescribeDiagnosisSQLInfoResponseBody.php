<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeDiagnosisSQLInfoResponseBody\stageInfos;
use AlibabaCloud\Tea\Model;

class DescribeDiagnosisSQLInfoResponseBody extends Model
{
    /**
     * @description The queried execution information, including the SQL statement, statistics, execution plan, and operator information.
     *
     * @var string
     */
    public $diagnosisSQLInfo;

    /**
     * @description The request ID.
     *
     * @example 1
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The queried execution information by stage.
     *
     * @var stageInfos[]
     */
    public $stageInfos;
    protected $_name = [
        'diagnosisSQLInfo' => 'DiagnosisSQLInfo',
        'requestId'        => 'RequestId',
        'stageInfos'       => 'StageInfos',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->diagnosisSQLInfo) {
            $res['DiagnosisSQLInfo'] = $this->diagnosisSQLInfo;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->stageInfos) {
            $res['StageInfos'] = [];
            if (null !== $this->stageInfos && \is_array($this->stageInfos)) {
                $n = 0;
                foreach ($this->stageInfos as $item) {
                    $res['StageInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDiagnosisSQLInfoResponseBody
     */
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
                $n                 = 0;
                foreach ($map['StageInfos'] as $item) {
                    $model->stageInfos[$n++] = null !== $item ? stageInfos::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
