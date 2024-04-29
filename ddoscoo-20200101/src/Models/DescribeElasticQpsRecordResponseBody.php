<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeElasticQpsRecordResponseBody\elasticQpsList;
use AlibabaCloud\Tea\Model;

class DescribeElasticQpsRecordResponseBody extends Model
{
    /**
     * @var elasticQpsList[]
     */
    public $elasticQpsList;

    /**
     * @example F68B34E2-570C-508D-95FD-DFB6611D518F
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'elasticQpsList' => 'ElasticQpsList',
        'requestId'      => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->elasticQpsList) {
            $res['ElasticQpsList'] = [];
            if (null !== $this->elasticQpsList && \is_array($this->elasticQpsList)) {
                $n = 0;
                foreach ($this->elasticQpsList as $item) {
                    $res['ElasticQpsList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeElasticQpsRecordResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ElasticQpsList'])) {
            if (!empty($map['ElasticQpsList'])) {
                $model->elasticQpsList = [];
                $n                     = 0;
                foreach ($map['ElasticQpsList'] as $item) {
                    $model->elasticQpsList[$n++] = null !== $item ? elasticQpsList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
