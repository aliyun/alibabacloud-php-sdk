<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models;

use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeDiagnosisSQLInfoResponseBody\stageInfos;
use AlibabaCloud\Tea\Model;

class DescribeDiagnosisSQLInfoResponseBody extends Model
{
    /**
     * @description Execution details of the SQL statement, including the SQL statement text, statistics, execution plan, and operator information.
     *
     * @var string
     */
    public $diagnosisSQLInfo;

    /**
     * @description The ID of the request.
     *
     * @example 1
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Execution details of the query by stage.
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
