<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Dara\Model;

class GetWebTerminalRequest extends Model
{
    /**
     * @var bool
     */
    public $isShared;

    /**
     * @var string
     */
    public $podUid;
    protected $_name = [
        'isShared' => 'IsShared',
        'podUid' => 'PodUid',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->isShared) {
            $res['IsShared'] = $this->isShared;
        }

        if (null !== $this->podUid) {
            $res['PodUid'] = $this->podUid;
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
        if (isset($map['IsShared'])) {
            $model->isShared = $map['IsShared'];
        }

        if (isset($map['PodUid'])) {
            $model->podUid = $map['PodUid'];
        }

        return $model;
    }
}
