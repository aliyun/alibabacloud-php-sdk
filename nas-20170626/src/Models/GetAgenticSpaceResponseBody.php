<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\NAS\V20170626\Models\GetAgenticSpaceResponseBody\agenticSpace;

class GetAgenticSpaceResponseBody extends Model
{
    /**
     * @var agenticSpace
     */
    public $agenticSpace;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'agenticSpace' => 'AgenticSpace',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->agenticSpace) {
            $this->agenticSpace->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agenticSpace) {
            $res['AgenticSpace'] = null !== $this->agenticSpace ? $this->agenticSpace->toArray($noStream) : $this->agenticSpace;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['AgenticSpace'])) {
            $model->agenticSpace = agenticSpace::fromMap($map['AgenticSpace']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
