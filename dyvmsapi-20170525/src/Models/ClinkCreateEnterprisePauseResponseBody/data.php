<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ClinkCreateEnterprisePauseResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ClinkCreateEnterprisePauseResponseBody\data\enterprisePause;

class data extends Model
{
    /**
     * @var string
     */
    public $clinkRequestId;

    /**
     * @var enterprisePause
     */
    public $enterprisePause;
    protected $_name = [
        'clinkRequestId' => 'ClinkRequestId',
        'enterprisePause' => 'EnterprisePause',
    ];

    public function validate()
    {
        if (null !== $this->enterprisePause) {
            $this->enterprisePause->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clinkRequestId) {
            $res['ClinkRequestId'] = $this->clinkRequestId;
        }

        if (null !== $this->enterprisePause) {
            $res['EnterprisePause'] = null !== $this->enterprisePause ? $this->enterprisePause->toArray($noStream) : $this->enterprisePause;
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
        if (isset($map['ClinkRequestId'])) {
            $model->clinkRequestId = $map['ClinkRequestId'];
        }

        if (isset($map['EnterprisePause'])) {
            $model->enterprisePause = enterprisePause::fromMap($map['EnterprisePause']);
        }

        return $model;
    }
}
