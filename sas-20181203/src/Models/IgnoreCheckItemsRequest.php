<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\IgnoreCheckItemsRequest\checkAndRiskTypeList;
use AlibabaCloud\Tea\Model;

class IgnoreCheckItemsRequest extends Model
{
    /**
     * @var checkAndRiskTypeList[]
     */
    public $checkAndRiskTypeList;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $reason;

    /**
     * @var int
     */
    public $type;

    /**
     * @var string[]
     */
    public $uuidList;
    protected $_name = [
        'checkAndRiskTypeList' => 'CheckAndRiskTypeList',
        'lang'                 => 'Lang',
        'reason'               => 'Reason',
        'type'                 => 'Type',
        'uuidList'             => 'UuidList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkAndRiskTypeList) {
            $res['CheckAndRiskTypeList'] = [];
            if (null !== $this->checkAndRiskTypeList && \is_array($this->checkAndRiskTypeList)) {
                $n = 0;
                foreach ($this->checkAndRiskTypeList as $item) {
                    $res['CheckAndRiskTypeList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->uuidList) {
            $res['UuidList'] = $this->uuidList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return IgnoreCheckItemsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CheckAndRiskTypeList'])) {
            if (!empty($map['CheckAndRiskTypeList'])) {
                $model->checkAndRiskTypeList = [];
                $n                           = 0;
                foreach ($map['CheckAndRiskTypeList'] as $item) {
                    $model->checkAndRiskTypeList[$n++] = null !== $item ? checkAndRiskTypeList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['UuidList'])) {
            if (!empty($map['UuidList'])) {
                $model->uuidList = $map['UuidList'];
            }
        }

        return $model;
    }
}
