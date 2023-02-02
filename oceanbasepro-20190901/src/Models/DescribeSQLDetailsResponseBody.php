<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeSQLDetailsResponseBody\SQLDetails;
use AlibabaCloud\Tea\Model;

class DescribeSQLDetailsResponseBody extends Model
{
    /**
     * @description The request ID.
     *
     * @example 473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The details of the SQL statement.
     *
     * @var SQLDetails[]
     */
    public $SQLDetails;
    protected $_name = [
        'requestId'  => 'RequestId',
        'SQLDetails' => 'SQLDetails',
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
        if (null !== $this->SQLDetails) {
            $res['SQLDetails'] = [];
            if (null !== $this->SQLDetails && \is_array($this->SQLDetails)) {
                $n = 0;
                foreach ($this->SQLDetails as $item) {
                    $res['SQLDetails'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSQLDetailsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SQLDetails'])) {
            if (!empty($map['SQLDetails'])) {
                $model->SQLDetails = [];
                $n                 = 0;
                foreach ($map['SQLDetails'] as $item) {
                    $model->SQLDetails[$n++] = null !== $item ? SQLDetails::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
