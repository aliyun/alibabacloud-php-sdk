<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FCSandbox\V20260509\Models;

use AlibabaCloud\Dara\Model;

class E2BLifecycle extends Model
{
    /**
     * @var bool
     */
    public $autoResume;

    /**
     * @var string
     */
    public $onTimeout;
    protected $_name = [
        'autoResume' => 'autoResume',
        'onTimeout' => 'onTimeout',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoResume) {
            $res['autoResume'] = $this->autoResume;
        }

        if (null !== $this->onTimeout) {
            $res['onTimeout'] = $this->onTimeout;
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
        if (isset($map['autoResume'])) {
            $model->autoResume = $map['autoResume'];
        }

        if (isset($map['onTimeout'])) {
            $model->onTimeout = $map['onTimeout'];
        }

        return $model;
    }
}
