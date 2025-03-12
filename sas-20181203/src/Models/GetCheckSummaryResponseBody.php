<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\GetCheckSummaryResponseBody\overallItemStatistic;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetCheckSummaryResponseBody\overallStatistic;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetCheckSummaryResponseBody\summarys;
use AlibabaCloud\Tea\Model;

class GetCheckSummaryResponseBody extends Model
{
    /**
     * @description The statistics about the number of check items.
     *
     * @var overallItemStatistic
     */
    public $overallItemStatistic;

    /**
     * @description The overall risk statistics.
     *
     * @var overallStatistic
     */
    public $overallStatistic;

    /**
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *
     * @example 843E4805-****-7EE12FA8DBFD
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The summary information about the configuration checks on cloud services.
     *
     * @var summarys[]
     */
    public $summarys;
    protected $_name = [
        'overallItemStatistic' => 'OverallItemStatistic',
        'overallStatistic'     => 'OverallStatistic',
        'requestId'            => 'RequestId',
        'summarys'             => 'Summarys',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->overallItemStatistic) {
            $res['OverallItemStatistic'] = null !== $this->overallItemStatistic ? $this->overallItemStatistic->toMap() : null;
        }
        if (null !== $this->overallStatistic) {
            $res['OverallStatistic'] = null !== $this->overallStatistic ? $this->overallStatistic->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->summarys) {
            $res['Summarys'] = [];
            if (null !== $this->summarys && \is_array($this->summarys)) {
                $n = 0;
                foreach ($this->summarys as $item) {
                    $res['Summarys'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetCheckSummaryResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OverallItemStatistic'])) {
            $model->overallItemStatistic = overallItemStatistic::fromMap($map['OverallItemStatistic']);
        }
        if (isset($map['OverallStatistic'])) {
            $model->overallStatistic = overallStatistic::fromMap($map['OverallStatistic']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Summarys'])) {
            if (!empty($map['Summarys'])) {
                $model->summarys = [];
                $n               = 0;
                foreach ($map['Summarys'] as $item) {
                    $model->summarys[$n++] = null !== $item ? summarys::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
