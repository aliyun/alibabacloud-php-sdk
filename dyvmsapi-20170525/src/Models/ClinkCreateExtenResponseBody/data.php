<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ClinkCreateExtenResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ClinkCreateExtenResponseBody\data\exten;

class data extends Model
{
    /**
     * @var string
     */
    public $clinkRequestId;

    /**
     * @var exten
     */
    public $exten;
    protected $_name = [
        'clinkRequestId' => 'ClinkRequestId',
        'exten' => 'Exten',
    ];

    public function validate()
    {
        if (null !== $this->exten) {
            $this->exten->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clinkRequestId) {
            $res['ClinkRequestId'] = $this->clinkRequestId;
        }

        if (null !== $this->exten) {
            $res['Exten'] = null !== $this->exten ? $this->exten->toArray($noStream) : $this->exten;
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

        if (isset($map['Exten'])) {
            $model->exten = exten::fromMap($map['Exten']);
        }

        return $model;
    }
}
