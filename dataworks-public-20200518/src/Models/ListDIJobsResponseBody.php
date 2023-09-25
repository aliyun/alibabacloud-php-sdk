<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListDIJobsResponseBody\DIJobPaging;
use AlibabaCloud\Tea\Model;

class ListDIJobsResponseBody extends Model
{
    /**
     * @var DIJobPaging
     */
    public $DIJobPaging;

    /**
     * @example 7263E4AC-9D2E-5B29-B8AF-7C5012E92A41
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'DIJobPaging' => 'DIJobPaging',
        'requestId'   => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DIJobPaging) {
            $res['DIJobPaging'] = null !== $this->DIJobPaging ? $this->DIJobPaging->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDIJobsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DIJobPaging'])) {
            $model->DIJobPaging = DIJobPaging::fromMap($map['DIJobPaging']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
