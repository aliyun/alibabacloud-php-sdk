<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\SDK\Ims\V20190815\Models\ListApplicationsResponse\applications;
use AlibabaCloud\Tea\Model;

class ListApplicationsResponse extends Model
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
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('applications', $this->applications, true);
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
     * @return ListApplicationsResponse
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
