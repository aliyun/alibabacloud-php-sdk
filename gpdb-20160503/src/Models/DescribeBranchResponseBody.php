<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeBranchResponseBody\branch;

class DescribeBranchResponseBody extends Model
{
    /**
     * @var branch
     */
    public $branch;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'branch' => 'Branch',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->branch) {
            $this->branch->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->branch) {
            $res['Branch'] = null !== $this->branch ? $this->branch->toArray($noStream) : $this->branch;
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
        if (isset($map['Branch'])) {
            $model->branch = branch::fromMap($map['Branch']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
