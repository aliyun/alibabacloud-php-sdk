<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Csas\V20230120\Models\UpdateProhibitedSoftwareResponseBody\software;

class UpdateProhibitedSoftwareResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var software
     */
    public $software;
    protected $_name = [
        'requestId' => 'RequestId',
        'software' => 'Software',
    ];

    public function validate()
    {
        if (null !== $this->software) {
            $this->software->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->software) {
            $res['Software'] = null !== $this->software ? $this->software->toArray($noStream) : $this->software;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Software'])) {
            $model->software = software::fromMap($map['Software']);
        }

        return $model;
    }
}
