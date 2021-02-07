<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\SDK\Ims\V20190815\Models\CreateApplicationResponseBody\application;
use AlibabaCloud\Tea\Model;

class CreateApplicationResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var application
     */
    public $application;
    protected $_name = [
        'requestId'   => 'RequestId',
        'application' => 'Application',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->application) {
            $res['Application'] = null !== $this->application ? $this->application->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateApplicationResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Application'])) {
            $model->application = application::fromMap($map['Application']);
        }

        return $model;
    }
}
