<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListAlertNotificationsResponseBody\listResult\data;

use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListAlertNotificationsResponseBody\listResult\data\alertReason\alertReasonParamList;
use AlibabaCloud\Tea\Model;

class alertReason extends Model
{
    /**
     * @var alertReasonParamList[]
     */
    public $alertReasonParamList;

    /**
     * @example 20241125
     *
     * @var string
     */
    public $bizDate;

    /**
     * @example VDM_BATCH_FINISH
     *
     * @var string
     */
    public $type;

    /**
     * @example 123456
     *
     * @var string
     */
    public $uniqueKey;
    protected $_name = [
        'alertReasonParamList' => 'AlertReasonParamList',
        'bizDate' => 'BizDate',
        'type' => 'Type',
        'uniqueKey' => 'UniqueKey',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->alertReasonParamList) {
            $res['AlertReasonParamList'] = [];
            if (null !== $this->alertReasonParamList && \is_array($this->alertReasonParamList)) {
                $n = 0;
                foreach ($this->alertReasonParamList as $item) {
                    $res['AlertReasonParamList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->bizDate) {
            $res['BizDate'] = $this->bizDate;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->uniqueKey) {
            $res['UniqueKey'] = $this->uniqueKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return alertReason
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlertReasonParamList'])) {
            if (!empty($map['AlertReasonParamList'])) {
                $model->alertReasonParamList = [];
                $n = 0;
                foreach ($map['AlertReasonParamList'] as $item) {
                    $model->alertReasonParamList[$n++] = null !== $item ? alertReasonParamList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['BizDate'])) {
            $model->bizDate = $map['BizDate'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['UniqueKey'])) {
            $model->uniqueKey = $map['UniqueKey'];
        }

        return $model;
    }
}
