<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\SDK\Oos\V20190601\Models\CreateApplicationResponseBody\application;
use AlibabaCloud\Tea\Model;

class CreateApplicationResponseBody extends Model
{
    /**
     * @description The information about the application.
     *
     * @var application
     */
    public $application;

    /**
     * @description The ID of the request.
     *
     * @example 274917E8-8E74-5928-A82F-4940F52F7ACB
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'application' => 'Application',
        'requestId'   => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->application) {
            $res['Application'] = null !== $this->application ? $this->application->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['Application'])) {
            $model->application = application::fromMap($map['Application']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
