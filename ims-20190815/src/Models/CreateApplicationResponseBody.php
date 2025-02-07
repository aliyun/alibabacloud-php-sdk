<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ims\V20190815\Models\CreateApplicationResponseBody\application;

class CreateApplicationResponseBody extends Model
{
    /**
     * @var application
     */
    public $application;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'application' => 'Application',
        'requestId'   => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->application) {
            $this->application->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->application) {
            $res['Application'] = null !== $this->application ? $this->application->toArray($noStream) : $this->application;
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
        if (isset($map['Application'])) {
            $model->application = application::fromMap($map['Application']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
