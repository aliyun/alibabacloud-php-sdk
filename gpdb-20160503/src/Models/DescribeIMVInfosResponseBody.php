<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeIMVInfosResponseBody\imvInfos;
use AlibabaCloud\Tea\Model;

class DescribeIMVInfosResponseBody extends Model
{
    /**
     * @example gp-xxxxxxxxx
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The queried materialized views.
     *
     * @var imvInfos[]
     */
    public $imvInfos;

    /**
     * @example ABB39CC3-4488-4857-905D-2E4A051D0521
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'DBInstanceId' => 'DBInstanceId',
        'imvInfos'     => 'ImvInfos',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->imvInfos) {
            $res['ImvInfos'] = [];
            if (null !== $this->imvInfos && \is_array($this->imvInfos)) {
                $n = 0;
                foreach ($this->imvInfos as $item) {
                    $res['ImvInfos'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribeIMVInfosResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['ImvInfos'])) {
            if (!empty($map['ImvInfos'])) {
                $model->imvInfos = [];
                $n               = 0;
                foreach ($map['ImvInfos'] as $item) {
                    $model->imvInfos[$n++] = null !== $item ? imvInfos::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
