<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeDomainSecurityProfileResponseBody;

use AlibabaCloud\Dara\Model;

class result extends Model
{
    /**
     * @var bool
     */
    public $globalEnable;
    /**
     * @var string
     */
    public $globalMode;
    protected $_name = [
        'globalEnable' => 'GlobalEnable',
        'globalMode'   => 'GlobalMode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->globalEnable) {
            $res['GlobalEnable'] = $this->globalEnable;
        }

        if (null !== $this->globalMode) {
            $res['GlobalMode'] = $this->globalMode;
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
        if (isset($map['GlobalEnable'])) {
            $model->globalEnable = $map['GlobalEnable'];
        }

        if (isset($map['GlobalMode'])) {
            $model->globalMode = $map['GlobalMode'];
        }

        return $model;
    }
}
