<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\SDK\Paidlc\V20201203\Models\Lifecycle\postStart;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\Lifecycle\preStop;
use AlibabaCloud\Tea\Model;

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

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->postStart) {
            $res['PostStart'] = null !== $this->postStart ? $this->postStart->toMap() : null;
        }
        if (null !== $this->preStop) {
            $res['PreStop'] = null !== $this->preStop ? $this->preStop->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return Lifecycle
     */
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
