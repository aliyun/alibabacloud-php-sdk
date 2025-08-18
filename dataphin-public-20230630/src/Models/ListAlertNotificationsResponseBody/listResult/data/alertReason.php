<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListAlertNotificationsResponseBody\listResult\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListAlertNotificationsResponseBody\listResult\data\alertReason\alertReasonParamList;

class alertReason extends Model
{
    /**
     * @var alertReasonParamList[]
     */
    public $alertReasonParamList;

    /**
     * @var string
     */
    public $bizDate;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $uniqueKey;
    protected $_name = [
        'alertReasonParamList' => 'AlertReasonParamList',
        'bizDate' => 'BizDate',
        'type' => 'Type',
        'uniqueKey' => 'UniqueKey',
    ];

    public function validate()
    {
        if (\is_array($this->alertReasonParamList)) {
            Model::validateArray($this->alertReasonParamList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alertReasonParamList) {
            if (\is_array($this->alertReasonParamList)) {
                $res['AlertReasonParamList'] = [];
                $n1 = 0;
                foreach ($this->alertReasonParamList as $item1) {
                    $res['AlertReasonParamList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlertReasonParamList'])) {
            if (!empty($map['AlertReasonParamList'])) {
                $model->alertReasonParamList = [];
                $n1 = 0;
                foreach ($map['AlertReasonParamList'] as $item1) {
                    $model->alertReasonParamList[$n1] = alertReasonParamList::fromMap($item1);
                    ++$n1;
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
