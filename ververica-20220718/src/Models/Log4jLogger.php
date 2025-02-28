<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Dara\Model;

class Log4jLogger extends Model
{
    /**
     * @var string
     */
    public $loggerLevel;
    /**
     * @var string
     */
    public $loggerName;
    protected $_name = [
        'loggerLevel' => 'loggerLevel',
        'loggerName'  => 'loggerName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->loggerLevel) {
            $res['loggerLevel'] = $this->loggerLevel;
        }

        if (null !== $this->loggerName) {
            $res['loggerName'] = $this->loggerName;
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
        if (isset($map['loggerLevel'])) {
            $model->loggerLevel = $map['loggerLevel'];
        }

        if (isset($map['loggerName'])) {
            $model->loggerName = $map['loggerName'];
        }

        return $model;
    }
}
