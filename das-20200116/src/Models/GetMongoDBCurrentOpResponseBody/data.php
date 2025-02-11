<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\GetMongoDBCurrentOpResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\DAS\V20200116\Models\GetMongoDBCurrentOpResponseBody\data\sessionList;
use AlibabaCloud\SDK\DAS\V20200116\Models\GetMongoDBCurrentOpResponseBody\data\sessionStat;

class data extends Model
{
    /**
     * @var sessionList[]
     */
    public $sessionList;
    /**
     * @var sessionStat
     */
    public $sessionStat;
    /**
     * @var int
     */
    public $timestamp;
    protected $_name = [
        'sessionList' => 'SessionList',
        'sessionStat' => 'SessionStat',
        'timestamp'   => 'Timestamp',
    ];

    public function validate()
    {
        if (\is_array($this->sessionList)) {
            Model::validateArray($this->sessionList);
        }
        if (null !== $this->sessionStat) {
            $this->sessionStat->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->sessionList) {
            if (\is_array($this->sessionList)) {
                $res['SessionList'] = [];
                $n1                 = 0;
                foreach ($this->sessionList as $item1) {
                    $res['SessionList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->sessionStat) {
            $res['SessionStat'] = null !== $this->sessionStat ? $this->sessionStat->toArray($noStream) : $this->sessionStat;
        }

        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
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
        if (isset($map['SessionList'])) {
            if (!empty($map['SessionList'])) {
                $model->sessionList = [];
                $n1                 = 0;
                foreach ($map['SessionList'] as $item1) {
                    $model->sessionList[$n1++] = sessionList::fromMap($item1);
                }
            }
        }

        if (isset($map['SessionStat'])) {
            $model->sessionStat = sessionStat::fromMap($map['SessionStat']);
        }

        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }

        return $model;
    }
}
