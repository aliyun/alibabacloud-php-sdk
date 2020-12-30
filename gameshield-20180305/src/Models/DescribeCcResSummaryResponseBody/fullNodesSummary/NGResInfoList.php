<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeCcResSummaryResponseBody\fullNodesSummary;

use AlibabaCloud\Tea\Model;

class NGResInfoList extends Model
{
    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $appId;

    /**
     * @var int
     */
    public $usedQps;

    /**
     * @var string
     */
    public $bizName;

    /**
     * @var string
     */
    public $bizId;
    protected $_name = [
        'appName' => 'AppName',
        'appId'   => 'AppId',
        'usedQps' => 'UsedQps',
        'bizName' => 'BizName',
        'bizId'   => 'BizId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->usedQps) {
            $res['UsedQps'] = $this->usedQps;
        }
        if (null !== $this->bizName) {
            $res['BizName'] = $this->bizName;
        }
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return NGResInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['UsedQps'])) {
            $model->usedQps = $map['UsedQps'];
        }
        if (isset($map['BizName'])) {
            $model->bizName = $map['BizName'];
        }
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }

        return $model;
    }
}
