<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeConsoleMessagesResponseBody\messageList;

use AlibabaCloud\Dara\Model;

class metaData extends Model
{
    /**
     * @var string
     */
    public $adDomain;

    /**
     * @var string
     */
    public $officeSiteId;

    /**
     * @var string[]
     */
    public $timer;

    /**
     * @var string
     */
    public $timerType;
    protected $_name = [
        'adDomain' => 'AdDomain',
        'officeSiteId' => 'OfficeSiteId',
        'timer' => 'Timer',
        'timerType' => 'TimerType',
    ];

    public function validate()
    {
        if (\is_array($this->timer)) {
            Model::validateArray($this->timer);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->adDomain) {
            $res['AdDomain'] = $this->adDomain;
        }

        if (null !== $this->officeSiteId) {
            $res['OfficeSiteId'] = $this->officeSiteId;
        }

        if (null !== $this->timer) {
            if (\is_array($this->timer)) {
                $res['Timer'] = [];
                $n1 = 0;
                foreach ($this->timer as $item1) {
                    $res['Timer'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->timerType) {
            $res['TimerType'] = $this->timerType;
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
        if (isset($map['AdDomain'])) {
            $model->adDomain = $map['AdDomain'];
        }

        if (isset($map['OfficeSiteId'])) {
            $model->officeSiteId = $map['OfficeSiteId'];
        }

        if (isset($map['Timer'])) {
            if (!empty($map['Timer'])) {
                $model->timer = [];
                $n1 = 0;
                foreach ($map['Timer'] as $item1) {
                    $model->timer[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['TimerType'])) {
            $model->timerType = $map['TimerType'];
        }

        return $model;
    }
}
