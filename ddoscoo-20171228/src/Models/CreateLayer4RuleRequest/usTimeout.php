<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20171228\Models\CreateLayer4RuleRequest;

use AlibabaCloud\Dara\Model;

class usTimeout extends Model
{
    /**
     * @var int
     */
    public $connectTimeout;

    /**
     * @var int
     */
    public $rsTimeout;
    protected $_name = [
        'connectTimeout' => 'ConnectTimeout',
        'rsTimeout' => 'RsTimeout',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->connectTimeout) {
            $res['ConnectTimeout'] = $this->connectTimeout;
        }

        if (null !== $this->rsTimeout) {
            $res['RsTimeout'] = $this->rsTimeout;
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
        if (isset($map['ConnectTimeout'])) {
            $model->connectTimeout = $map['ConnectTimeout'];
        }

        if (isset($map['RsTimeout'])) {
            $model->rsTimeout = $map['RsTimeout'];
        }

        return $model;
    }
}
