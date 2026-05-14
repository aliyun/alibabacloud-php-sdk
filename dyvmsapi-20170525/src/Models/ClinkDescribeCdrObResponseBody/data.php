<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ClinkDescribeCdrObResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ClinkDescribeCdrObResponseBody\data\cdrOb;

class data extends Model
{
    /**
     * @var cdrOb
     */
    public $cdrOb;

    /**
     * @var string
     */
    public $clinkRequestId;
    protected $_name = [
        'cdrOb' => 'CdrOb',
        'clinkRequestId' => 'ClinkRequestId',
    ];

    public function validate()
    {
        if (null !== $this->cdrOb) {
            $this->cdrOb->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cdrOb) {
            $res['CdrOb'] = null !== $this->cdrOb ? $this->cdrOb->toArray($noStream) : $this->cdrOb;
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
        if (isset($map['CdrOb'])) {
            $model->cdrOb = cdrOb::fromMap($map['CdrOb']);
        }

        if (isset($map['ClinkRequestId'])) {
            $model->clinkRequestId = $map['ClinkRequestId'];
        }

        return $model;
    }
}
