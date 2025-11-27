<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Dara\Model;

class ConfirmNotifyRequest extends Model
{
    /**
     * @var int
     */
    public $confirmor;

    /**
     * @var int[]
     */
    public $notifyIdList;
    protected $_name = [
        'confirmor' => 'Confirmor',
        'notifyIdList' => 'NotifyIdList',
    ];

    public function validate()
    {
        if (\is_array($this->notifyIdList)) {
            Model::validateArray($this->notifyIdList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->confirmor) {
            $res['Confirmor'] = $this->confirmor;
        }

        if (null !== $this->notifyIdList) {
            if (\is_array($this->notifyIdList)) {
                $res['NotifyIdList'] = [];
                $n1 = 0;
                foreach ($this->notifyIdList as $item1) {
                    $res['NotifyIdList'][$n1] = $item1;
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
        if (isset($map['Confirmor'])) {
            $model->confirmor = $map['Confirmor'];
        }

        if (isset($map['NotifyIdList'])) {
            if (!empty($map['NotifyIdList'])) {
                $model->notifyIdList = [];
                $n1 = 0;
                foreach ($map['NotifyIdList'] as $item1) {
                    $model->notifyIdList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
