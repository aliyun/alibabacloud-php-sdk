<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ims\V20190815\Models\ListApplicationsResponseBody\applications;

class ListApplicationsResponseBody extends Model
{
    /**
     * @var applications
     */
    public $applications;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'applications' => 'Applications',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->applications) {
            $this->applications->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applications) {
            $res['Applications'] = null !== $this->applications ? $this->applications->toArray($noStream) : $this->applications;
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
        if (isset($map['Applications'])) {
            $model->applications = applications::fromMap($map['Applications']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
