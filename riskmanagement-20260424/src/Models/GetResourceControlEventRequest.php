<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RiskManagement\V20260424\Models;

use AlibabaCloud\Dara\Model;

class GetResourceControlEventRequest extends Model
{
    /**
     * @var string
     */
    public $aliyunLang;

    /**
     * @var string
     */
    public $eventId;

    /**
     * @var string[]
     */
    public $eventIdList;
    protected $_name = [
        'aliyunLang' => 'AliyunLang',
        'eventId' => 'EventId',
        'eventIdList' => 'EventIdList',
    ];

    public function validate()
    {
        if (\is_array($this->eventIdList)) {
            Model::validateArray($this->eventIdList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aliyunLang) {
            $res['AliyunLang'] = $this->aliyunLang;
        }

        if (null !== $this->eventId) {
            $res['EventId'] = $this->eventId;
        }

        if (null !== $this->eventIdList) {
            if (\is_array($this->eventIdList)) {
                $res['EventIdList'] = [];
                $n1 = 0;
                foreach ($this->eventIdList as $item1) {
                    $res['EventIdList'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['AliyunLang'])) {
            $model->aliyunLang = $map['AliyunLang'];
        }

        if (isset($map['EventId'])) {
            $model->eventId = $map['EventId'];
        }

        if (isset($map['EventIdList'])) {
            if (!empty($map['EventIdList'])) {
                $model->eventIdList = [];
                $n1 = 0;
                foreach ($map['EventIdList'] as $item1) {
                    $model->eventIdList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
