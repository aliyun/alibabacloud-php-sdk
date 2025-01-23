<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListDIJobsResponseBody\DIJobPaging;

class ListDIJobsResponseBody extends Model
{
    /**
     * @var DIJobPaging
     */
    public $DIJobPaging;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'DIJobPaging' => 'DIJobPaging',
        'requestId'   => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->DIJobPaging) {
            $this->DIJobPaging->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DIJobPaging) {
            $res['DIJobPaging'] = null !== $this->DIJobPaging ? $this->DIJobPaging->toArray($noStream) : $this->DIJobPaging;
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
        if (isset($map['DIJobPaging'])) {
            $model->DIJobPaging = DIJobPaging::fromMap($map['DIJobPaging']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
