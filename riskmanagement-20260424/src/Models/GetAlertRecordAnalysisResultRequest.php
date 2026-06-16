<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RiskManagement\V20260424\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\RiskManagement\V20260424\Models\GetAlertRecordAnalysisResultRequest\uniqueTagList;

class GetAlertRecordAnalysisResultRequest extends Model
{
    /**
     * @var string
     */
    public $alarmUniqueInfo;

    /**
     * @var string
     */
    public $aliyunLang;

    /**
     * @var string
     */
    public $uniqueInfo;

    /**
     * @var uniqueTagList[]
     */
    public $uniqueTagList;

    /**
     * @var string
     */
    public $uuid;
    protected $_name = [
        'alarmUniqueInfo' => 'AlarmUniqueInfo',
        'aliyunLang' => 'AliyunLang',
        'uniqueInfo' => 'UniqueInfo',
        'uniqueTagList' => 'UniqueTagList',
        'uuid' => 'Uuid',
    ];

    public function validate()
    {
        if (\is_array($this->uniqueTagList)) {
            Model::validateArray($this->uniqueTagList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alarmUniqueInfo) {
            $res['AlarmUniqueInfo'] = $this->alarmUniqueInfo;
        }

        if (null !== $this->aliyunLang) {
            $res['AliyunLang'] = $this->aliyunLang;
        }

        if (null !== $this->uniqueInfo) {
            $res['UniqueInfo'] = $this->uniqueInfo;
        }

        if (null !== $this->uniqueTagList) {
            if (\is_array($this->uniqueTagList)) {
                $res['UniqueTagList'] = [];
                $n1 = 0;
                foreach ($this->uniqueTagList as $item1) {
                    $res['UniqueTagList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
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
        if (isset($map['AlarmUniqueInfo'])) {
            $model->alarmUniqueInfo = $map['AlarmUniqueInfo'];
        }

        if (isset($map['AliyunLang'])) {
            $model->aliyunLang = $map['AliyunLang'];
        }

        if (isset($map['UniqueInfo'])) {
            $model->uniqueInfo = $map['UniqueInfo'];
        }

        if (isset($map['UniqueTagList'])) {
            if (!empty($map['UniqueTagList'])) {
                $model->uniqueTagList = [];
                $n1 = 0;
                foreach ($map['UniqueTagList'] as $item1) {
                    $model->uniqueTagList[$n1] = uniqueTagList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
