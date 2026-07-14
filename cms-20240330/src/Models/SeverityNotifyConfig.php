<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class SeverityNotifyConfig extends Model
{
    /**
     * @var DirectNotifyReceiver[]
     */
    public $receivers;

    /**
     * @var bool
     */
    public $sendRecoverNotification;
    protected $_name = [
        'receivers' => 'receivers',
        'sendRecoverNotification' => 'sendRecoverNotification',
    ];

    public function validate()
    {
        if (\is_array($this->receivers)) {
            Model::validateArray($this->receivers);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->receivers) {
            if (\is_array($this->receivers)) {
                $res['receivers'] = [];
                $n1 = 0;
                foreach ($this->receivers as $item1) {
                    $res['receivers'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->sendRecoverNotification) {
            $res['sendRecoverNotification'] = $this->sendRecoverNotification;
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
        if (isset($map['receivers'])) {
            if (!empty($map['receivers'])) {
                $model->receivers = [];
                $n1 = 0;
                foreach ($map['receivers'] as $item1) {
                    $model->receivers[$n1] = DirectNotifyReceiver::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['sendRecoverNotification'])) {
            $model->sendRecoverNotification = $map['sendRecoverNotification'];
        }

        return $model;
    }
}
