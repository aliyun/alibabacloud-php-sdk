<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\PutRestorePreCheckResponseBody\precheckBackupResult\list_;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @var string
     */
    public $checkFailReason;

    /**
     * @var string
     */
    public $checkItemContent;

    /**
     * @var string
     */
    public $checkItemName;

    /**
     * @var string
     */
    public $checkResult;

    /**
     * @var int
     */
    public $itemId;

    /**
     * @var bool
     */
    public $result;
    protected $_name = [
        'checkFailReason'  => 'CheckFailReason',
        'checkItemContent' => 'CheckItemContent',
        'checkItemName'    => 'CheckItemName',
        'checkResult'      => 'CheckResult',
        'itemId'           => 'ItemId',
        'result'           => 'Result',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkFailReason) {
            $res['CheckFailReason'] = $this->checkFailReason;
        }
        if (null !== $this->checkItemContent) {
            $res['CheckItemContent'] = $this->checkItemContent;
        }
        if (null !== $this->checkItemName) {
            $res['CheckItemName'] = $this->checkItemName;
        }
        if (null !== $this->checkResult) {
            $res['CheckResult'] = $this->checkResult;
        }
        if (null !== $this->itemId) {
            $res['ItemId'] = $this->itemId;
        }
        if (null !== $this->result) {
            $res['Result'] = $this->result;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CheckFailReason'])) {
            $model->checkFailReason = $map['CheckFailReason'];
        }
        if (isset($map['CheckItemContent'])) {
            $model->checkItemContent = $map['CheckItemContent'];
        }
        if (isset($map['CheckItemName'])) {
            $model->checkItemName = $map['CheckItemName'];
        }
        if (isset($map['CheckResult'])) {
            $model->checkResult = $map['CheckResult'];
        }
        if (isset($map['ItemId'])) {
            $model->itemId = $map['ItemId'];
        }
        if (isset($map['Result'])) {
            $model->result = $map['Result'];
        }

        return $model;
    }
}
