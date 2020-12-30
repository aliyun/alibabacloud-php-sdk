<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dm\V20151123\Models\QuerySmsStatisticsResponseBody\data;

use AlibabaCloud\Tea\Model;

class stat extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $faildCount;

    /**
     * @var string
     */
    public $successCount;

    /**
     * @var string
     */
    public $requestCount;
    protected $_name = [
        'createTime'   => 'CreateTime',
        'faildCount'   => 'faildCount',
        'successCount' => 'successCount',
        'requestCount' => 'requestCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->faildCount) {
            $res['faildCount'] = $this->faildCount;
        }
        if (null !== $this->successCount) {
            $res['successCount'] = $this->successCount;
        }
        if (null !== $this->requestCount) {
            $res['requestCount'] = $this->requestCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return stat
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['faildCount'])) {
            $model->faildCount = $map['faildCount'];
        }
        if (isset($map['successCount'])) {
            $model->successCount = $map['successCount'];
        }
        if (isset($map['requestCount'])) {
            $model->requestCount = $map['requestCount'];
        }

        return $model;
    }
}
