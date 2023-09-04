<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models;

use AlibabaCloud\SDK\Cloudsso\V20210515\Models\GetDirectoryStatisticsResponseBody\directoryStatistics;
use AlibabaCloud\Tea\Model;

class GetDirectoryStatisticsResponseBody extends Model
{
    /**
     * @description The statistics of the directory.
     *
     * @var directoryStatistics
     */
    public $directoryStatistics;

    /**
     * @description The ID of the request.
     *
     * @example 7B7228B0-A435-5D27-A6B2-ED3571F0654B
     *
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
