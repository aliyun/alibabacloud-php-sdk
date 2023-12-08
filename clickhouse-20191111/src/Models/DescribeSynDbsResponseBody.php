<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20191111\Models;

use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeSynDbsResponseBody\synDbs;
use AlibabaCloud\Tea\Model;

class DescribeSynDbsResponseBody extends Model
{
    /**
     * @example 7655F5F9-1313-5ABA-8516-F6EB79605A5F
     *
     * @var string
     */
    public $requestId;

    /**
     * @var synDbs[]
     */
    public $synDbs;
    protected $_name = [
        'requestId' => 'RequestId',
        'synDbs'    => 'SynDbs',
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
        if (null !== $this->synDbs) {
            $res['SynDbs'] = [];
            if (null !== $this->synDbs && \is_array($this->synDbs)) {
                $n = 0;
                foreach ($this->synDbs as $item) {
                    $res['SynDbs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSynDbsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SynDbs'])) {
            if (!empty($map['SynDbs'])) {
                $model->synDbs = [];
                $n             = 0;
                foreach ($map['SynDbs'] as $item) {
                    $model->synDbs[$n++] = null !== $item ? synDbs::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
