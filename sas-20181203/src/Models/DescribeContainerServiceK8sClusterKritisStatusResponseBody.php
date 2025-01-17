<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeContainerServiceK8sClusterKritisStatusResponseBody\kritisStatus;

class DescribeContainerServiceK8sClusterKritisStatusResponseBody extends Model
{
    /**
     * @var kritisStatus
     */
    public $kritisStatus;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'kritisStatus' => 'KritisStatus',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->kritisStatus) {
            $this->kritisStatus->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->kritisStatus) {
            $res['KritisStatus'] = null !== $this->kritisStatus ? $this->kritisStatus->toArray($noStream) : $this->kritisStatus;
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
        if (isset($map['KritisStatus'])) {
            $model->kritisStatus = kritisStatus::fromMap($map['KritisStatus']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
