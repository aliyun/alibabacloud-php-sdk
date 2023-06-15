<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\SDK\Rds\V20140815\Models\DeleteBackupFileResponseBody\deletedBaksetIds;
use AlibabaCloud\Tea\Model;

class DeleteBackupFileResponseBody extends Model
{
    /**
     * @description An array that consists of the IDs of deleted backup sets.
     *
     * @var deletedBaksetIds
     */
    public $deletedBaksetIds;

    /**
     * @description The ID of the request.
     *
     * @example C7B3A91C-0ACD-4948-ACAE-xxxxxxxD4069
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'deletedBaksetIds' => 'DeletedBaksetIds',
        'requestId'        => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deletedBaksetIds) {
            $res['DeletedBaksetIds'] = null !== $this->deletedBaksetIds ? $this->deletedBaksetIds->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteBackupFileResponseBody
     */
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
