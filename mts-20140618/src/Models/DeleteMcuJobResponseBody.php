<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models;

use AlibabaCloud\SDK\Mts\V20140618\Models\DeleteMcuJobResponseBody\deletedJobIds;
use AlibabaCloud\SDK\Mts\V20140618\Models\DeleteMcuJobResponseBody\nonExistJobIds;
use AlibabaCloud\Tea\Model;

class DeleteMcuJobResponseBody extends Model
{
    /**
     * @var deletedJobIds
     */
    public $deletedJobIds;

    /**
     * @var nonExistJobIds
     */
    public $nonExistJobIds;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'deletedJobIds'  => 'DeletedJobIds',
        'nonExistJobIds' => 'NonExistJobIds',
        'requestId'      => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deletedJobIds) {
            $res['DeletedJobIds'] = null !== $this->deletedJobIds ? $this->deletedJobIds->toMap() : null;
        }
        if (null !== $this->nonExistJobIds) {
            $res['NonExistJobIds'] = null !== $this->nonExistJobIds ? $this->nonExistJobIds->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteMcuJobResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeletedJobIds'])) {
            $model->deletedJobIds = deletedJobIds::fromMap($map['DeletedJobIds']);
        }
        if (isset($map['NonExistJobIds'])) {
            $model->nonExistJobIds = nonExistJobIds::fromMap($map['NonExistJobIds']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
