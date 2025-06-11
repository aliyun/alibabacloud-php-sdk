<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\GetDirectoryStatisticsResponseBody\directoryStatistics;

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
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->directoryStatistics) {
            $this->directoryStatistics->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->directoryStatistics) {
            $res['DirectoryStatistics'] = null !== $this->directoryStatistics ? $this->directoryStatistics->toArray($noStream) : $this->directoryStatistics;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['DirectoryStatistics'])) {
            $model->directoryStatistics = directoryStatistics::fromMap($map['DirectoryStatistics']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
