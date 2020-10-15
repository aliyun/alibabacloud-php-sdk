<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class DescribeApplicationResourceSummaryResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $applicationResource;
    protected $_name = [
        'requestId'           => 'RequestId',
        'applicationResource' => 'ApplicationResource',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('applicationResource', $this->applicationResource, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->applicationResource) {
            $res['ApplicationResource'] = $this->applicationResource;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeApplicationResourceSummaryResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ApplicationResource'])) {
            $model->applicationResource = $map['ApplicationResource'];
        }

        return $model;
    }
}
