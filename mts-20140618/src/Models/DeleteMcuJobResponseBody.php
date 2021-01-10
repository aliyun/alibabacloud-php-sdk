<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models;

use AlibabaCloud\SDK\Mts\V20140618\Models\DeleteMcuJobResponseBody\deletedJobIds;
use AlibabaCloud\SDK\Mts\V20140618\Models\DeleteMcuJobResponseBody\nonExistJobIds;
use AlibabaCloud\Tea\Model;

class DeleteMcuJobResponseBody extends Model
{
    /**
     * @var nonExistJobIds
     */
    public $nonExistJobIds;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var deletedJobIds
     */
    public $deletedJobIds;
    protected $_name = [
        'nonExistJobIds' => 'NonExistJobIds',
        'requestId'      => 'RequestId',
        'deletedJobIds'  => 'DeletedJobIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nonExistJobIds) {
            $res['NonExistJobIds'] = null !== $this->nonExistJobIds ? $this->nonExistJobIds->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->deletedJobIds) {
            $res['DeletedJobIds'] = null !== $this->deletedJobIds ? $this->deletedJobIds->toMap() : null;
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
        if (isset($map['NonExistJobIds'])) {
            $model->nonExistJobIds = nonExistJobIds::fromMap($map['NonExistJobIds']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DeletedJobIds'])) {
            $model->deletedJobIds = deletedJobIds::fromMap($map['DeletedJobIds']);
        }

        return $model;
    }
}
