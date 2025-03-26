<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rds\V20140815\Models\DeleteBackupFileResponseBody\deletedBaksetIds;

class DeleteBackupFileResponseBody extends Model
{
    /**
     * @var deletedBaksetIds
     */
    public $deletedBaksetIds;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'deletedBaksetIds' => 'DeletedBaksetIds',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->deletedBaksetIds) {
            $this->deletedBaksetIds->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deletedBaksetIds) {
            $res['DeletedBaksetIds'] = null !== $this->deletedBaksetIds ? $this->deletedBaksetIds->toArray($noStream) : $this->deletedBaksetIds;
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
        if (isset($map['DeletedBaksetIds'])) {
            $model->deletedBaksetIds = deletedBaksetIds::fromMap($map['DeletedBaksetIds']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
