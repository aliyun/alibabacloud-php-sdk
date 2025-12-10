<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models;

use AlibabaCloud\Dara\Model;

class GetAutoGroupingStatusResponseBody extends Model
{
    /**
     * @var bool
     */
    public $enableExistedResourcesTransfer;

    /**
     * @var string
     */
    public $enableStatus;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'enableExistedResourcesTransfer' => 'EnableExistedResourcesTransfer',
        'enableStatus' => 'EnableStatus',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enableExistedResourcesTransfer) {
            $res['EnableExistedResourcesTransfer'] = $this->enableExistedResourcesTransfer;
        }

        if (null !== $this->enableStatus) {
            $res['EnableStatus'] = $this->enableStatus;
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
        if (isset($map['EnableExistedResourcesTransfer'])) {
            $model->enableExistedResourcesTransfer = $map['EnableExistedResourcesTransfer'];
        }

        if (isset($map['EnableStatus'])) {
            $model->enableStatus = $map['EnableStatus'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
