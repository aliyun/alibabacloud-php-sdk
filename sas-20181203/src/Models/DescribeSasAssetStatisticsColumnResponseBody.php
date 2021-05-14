<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeSasAssetStatisticsColumnResponseBody extends Model
{
    /**
     * @var string
     */
    public $statisticsColumn;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'statisticsColumn' => 'StatisticsColumn',
        'requestId'        => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->statisticsColumn) {
            $res['StatisticsColumn'] = $this->statisticsColumn;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['StatisticsColumn'])) {
            $model->statisticsColumn = $map['StatisticsColumn'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
