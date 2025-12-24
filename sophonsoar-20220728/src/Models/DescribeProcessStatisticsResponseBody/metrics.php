<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribeProcessStatisticsResponseBody;

use AlibabaCloud\Dara\Model;

class metrics extends Model
{
    /**
     * @var int
     */
    public $banFileNum;

    /**
     * @var int
     */
    public $banIpNum;

    /**
     * @var int
     */
    public $banProcessNum;

    /**
     * @var int
     */
    public $taskNum;
    protected $_name = [
        'banFileNum' => 'BanFileNum',
        'banIpNum' => 'BanIpNum',
        'banProcessNum' => 'BanProcessNum',
        'taskNum' => 'TaskNum',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
