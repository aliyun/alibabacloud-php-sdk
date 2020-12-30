<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeSasAssetStatisticsColumnResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $statisticsColumn;
    protected $_name = [
        'requestId'        => 'RequestId',
        'statisticsColumn' => 'StatisticsColumn',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->statisticsColumn) {
            $res['StatisticsColumn'] = $this->statisticsColumn;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSasAssetStatisticsColumnResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['StatisticsColumn'])) {
            $model->statisticsColumn = $map['StatisticsColumn'];
        }

        return $model;
    }
}
