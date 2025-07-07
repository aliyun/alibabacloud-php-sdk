<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\GetLivyComputeTokenResponseBody\data;

use AlibabaCloud\Dara\Model;

class autoExpireConfiguration extends Model
{
    /**
     * @var bool
     */
    public $enable;

    /**
     * @var int
     */
    public $expireDays;
    protected $_name = [
        'enable' => 'enable',
        'expireDays' => 'expireDays',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enable) {
            $res['enable'] = $this->enable;
        }

        if (null !== $this->expireDays) {
            $res['expireDays'] = $this->expireDays;
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
        if (isset($map['enable'])) {
            $model->enable = $map['enable'];
        }

        if (isset($map['expireDays'])) {
            $model->expireDays = $map['expireDays'];
        }

        return $model;
    }
}
