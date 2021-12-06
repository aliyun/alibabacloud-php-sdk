<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models;

use AlibabaCloud\SDK\Cloudsso\V20210515\Models\GetDirectoryStatisticsResponseBody\directoryStatistics;
use AlibabaCloud\Tea\Model;

class GetDirectoryStatisticsResponseBody extends Model
{
    /**
     * @var directoryStatistics
     */
    public $directoryStatistics;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'directoryStatistics' => 'DirectoryStatistics',
        'requestId'           => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->directoryStatistics) {
            $res['DirectoryStatistics'] = null !== $this->directoryStatistics ? $this->directoryStatistics->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDirectoryStatisticsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DirectoryStatistics'])) {
            $model->directoryStatistics = directoryStatistics::fromMap($map['DirectoryStatistics']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
