<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\RetrieveRunResponseBody\run;

class RetrieveRunResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var run
     */
    public $run;
    protected $_name = [
        'requestId' => 'requestId',
        'run' => 'run',
    ];

    public function validate()
    {
        if (null !== $this->run) {
            $this->run->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->run) {
            $res['run'] = null !== $this->run ? $this->run->toArray($noStream) : $this->run;
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
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['run'])) {
            $model->run = run::fromMap($map['run']);
        }

        return $model;
    }
}
