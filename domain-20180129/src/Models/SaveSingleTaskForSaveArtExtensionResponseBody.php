<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models;

use AlibabaCloud\Tea\Model;

class SaveSingleTaskForSaveArtExtensionResponseBody extends Model
{
    /**
     * @example E2598CAF-DBFE-494E-95EF-B42A33C178AB
     *
     * @var string
     */
    public $requestId;

    /**
     * @example e893148f-6343-4ae1-9eba-6e2a4116e141
     *
     * @var string
     */
    public $taskNo;
    protected $_name = [
        'requestId' => 'RequestId',
        'taskNo'    => 'TaskNo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->taskNo) {
            $res['TaskNo'] = $this->taskNo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SaveSingleTaskForSaveArtExtensionResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TaskNo'])) {
            $model->taskNo = $map['TaskNo'];
        }

        return $model;
    }
}
