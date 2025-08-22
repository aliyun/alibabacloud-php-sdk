<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\Lifecycle\postStart;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\Lifecycle\preStop;

class Lifecycle extends Model
{
    /**
     * @var postStart
     */
    public $postStart;

    /**
     * @var preStop
     */
    public $preStop;
    protected $_name = [
        'postStart' => 'PostStart',
        'preStop' => 'PreStop',
    ];

    public function validate()
    {
        if (null !== $this->postStart) {
            $this->postStart->validate();
        }
        if (null !== $this->preStop) {
            $this->preStop->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->postStart) {
            $res['PostStart'] = null !== $this->postStart ? $this->postStart->toArray($noStream) : $this->postStart;
        }

        if (null !== $this->preStop) {
            $res['PreStop'] = null !== $this->preStop ? $this->preStop->toArray($noStream) : $this->preStop;
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
        if (isset($map['PostStart'])) {
            $model->postStart = postStart::fromMap($map['PostStart']);
        }

        if (isset($map['PreStop'])) {
            $model->preStop = preStop::fromMap($map['PreStop']);
        }

        return $model;
    }
}
