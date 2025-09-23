<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ListSupportModelsResponseBody\modelNames;

class ListSupportModelsResponseBody extends Model
{
    /**
     * @var modelNames
     */
    public $modelNames;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'modelNames' => 'ModelNames',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->modelNames) {
            $this->modelNames->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->modelNames) {
            $res['ModelNames'] = null !== $this->modelNames ? $this->modelNames->toArray($noStream) : $this->modelNames;
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
        if (isset($map['ModelNames'])) {
            $model->modelNames = modelNames::fromMap($map['ModelNames']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
