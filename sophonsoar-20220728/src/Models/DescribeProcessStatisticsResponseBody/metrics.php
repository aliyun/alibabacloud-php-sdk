<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribeProcessStatisticsResponseBody;

use AlibabaCloud\Tea\Model;

class metrics extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $banFileNum;

    /**
     * @example 1
     *
     * @var int
     */
    public $banIpNum;

    /**
     * @example 1
     *
     * @var int
     */
    public $banProcessNum;

    /**
     * @example 1
     *
     * @var int
     */
    public $taskNum;
    protected $_name = [
        'banFileNum' => 'BanFileNum',
        'banIpNum' => 'BanIpNum',
        'banProcessNum' => 'BanProcessNum',
        'taskNum' => 'TaskNum',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->banFileNum) {
            $res['BanFileNum'] = $this->banFileNum;
        }
        if (null !== $this->banIpNum) {
            $res['BanIpNum'] = $this->banIpNum;
        }
        if (null !== $this->banProcessNum) {
            $res['BanProcessNum'] = $this->banProcessNum;
        }
        if (null !== $this->taskNum) {
            $res['TaskNum'] = $this->taskNum;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return metrics
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BanFileNum'])) {
            $model->banFileNum = $map['BanFileNum'];
        }
        if (isset($map['BanIpNum'])) {
            $model->banIpNum = $map['BanIpNum'];
        }
        if (isset($map['BanProcessNum'])) {
            $model->banProcessNum = $map['BanProcessNum'];
        }
        if (isset($map['TaskNum'])) {
            $model->taskNum = $map['TaskNum'];
        }

        return $model;
    }
}
