<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\SDK\Aliding\V20230426\Models\RetrieveRunResponseBody\run;
use AlibabaCloud\Tea\Model;

class RetrieveRunResponseBody extends Model
{
    /**
     * @example 0FAAEC9C-C6C8-5C87-AF8E-1195889BBXXX
     *
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

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }
        if (null !== $this->run) {
            $res['run'] = null !== $this->run ? $this->run->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RetrieveRunResponseBody
     */
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
