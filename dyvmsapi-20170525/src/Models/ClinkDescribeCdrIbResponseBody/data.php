<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ClinkDescribeCdrIbResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ClinkDescribeCdrIbResponseBody\data\cdrIb;

class data extends Model
{
    /**
     * @var cdrIb
     */
    public $cdrIb;

    /**
     * @var string
     */
    public $clinkRequestId;
    protected $_name = [
        'cdrIb' => 'CdrIb',
        'clinkRequestId' => 'ClinkRequestId',
    ];

    public function validate()
    {
        if (null !== $this->cdrIb) {
            $this->cdrIb->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cdrIb) {
            $res['CdrIb'] = null !== $this->cdrIb ? $this->cdrIb->toArray($noStream) : $this->cdrIb;
        }

        if (null !== $this->clinkRequestId) {
            $res['ClinkRequestId'] = $this->clinkRequestId;
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
        if (isset($map['CdrIb'])) {
            $model->cdrIb = cdrIb::fromMap($map['CdrIb']);
        }

        if (isset($map['ClinkRequestId'])) {
            $model->clinkRequestId = $map['ClinkRequestId'];
        }

        return $model;
    }
}
