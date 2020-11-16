<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class DescribeLiveRealtimeLogAuthorizedResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $authorizedStatus;
    protected $_name = [
        'requestId'        => 'RequestId',
        'authorizedStatus' => 'AuthorizedStatus',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('authorizedStatus', $this->authorizedStatus, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->authorizedStatus) {
            $res['AuthorizedStatus'] = $this->authorizedStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLiveRealtimeLogAuthorizedResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['AuthorizedStatus'])) {
            $model->authorizedStatus = $map['AuthorizedStatus'];
        }

        return $model;
    }
}
