<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\SDK\Ims\V20190815\Models\ListApplicationsResponseBody\applications;
use AlibabaCloud\Tea\Model;

class ListApplicationsResponseBody extends Model
{
    /**
     * @description The information about the application.
     *
     * @var applications
     */
    public $applications;

    /**
     * @description The ID of the request.
     *
     * @example CE458B58-8C40-46F7-A9D4-CB85136B0C06
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'applications' => 'Applications',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applications) {
            $res['Applications'] = null !== $this->applications ? $this->applications->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['Applications'])) {
            $model->applications = applications::fromMap($map['Applications']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
