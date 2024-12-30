<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListAlertEventsResponseBody\listResult\data;

use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListAlertEventsResponseBody\listResult\data\alertReason\alertReasonParamList;
use AlibabaCloud\Tea\Model;

class alertReason extends Model
{
    /**
     * @var alertReasonParamList[]
     */
    public $alertReasonParamList;

    /**
     * @example 2024-11-25 10:02:47
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
     * @example t_6340134343289405440_20241124_639873707610
     *
     * @var string
     */
    public $uniqueKey;
    protected $_name = [
        'alertReasonParamList' => 'AlertReasonParamList',
        'bizDate'              => 'BizDate',
        'type'                 => 'Type',
        'uniqueKey'            => 'UniqueKey',
    ];

    public function validate()
    {
    }

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
                $n                           = 0;
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
