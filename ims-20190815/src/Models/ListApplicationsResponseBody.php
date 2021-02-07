<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\SDK\Ims\V20190815\Models\ListApplicationsResponseBody\applications;
use AlibabaCloud\Tea\Model;

class ListApplicationsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var applications
     */
    public $applications;
    protected $_name = [
        'requestId'    => 'RequestId',
        'applications' => 'Applications',
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
        if (null !== $this->applications) {
            $res['Applications'] = null !== $this->applications ? $this->applications->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListApplicationsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Applications'])) {
            $model->applications = applications::fromMap($map['Applications']);
        }

        return $model;
    }
}
