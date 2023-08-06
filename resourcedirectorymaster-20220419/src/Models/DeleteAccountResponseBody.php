<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models;

use AlibabaCloud\Tea\Model;

class DeleteAccountResponseBody extends Model
{
    /**
     * @description The type of the deletion. Valid values:
     *
     *   0: direct deletion. If the member does not have pay-as-you-go resources that are purchased within the previous 30 days, the system directly deletes the member.
     *   1: deletion with a silence period. If the member has pay-as-you-go resources that are purchased within the previous 30 days, the member enters a silence period. The system starts to delete the member until the silence period ends. For more information about the silence period, see [What is the silence period for member deletion?](~~446079~~)
     *
     * @example 0
     *
     * @var string
     */
    public $deletionType;

    /**
     * @description The ID of the request.
     *
     * @example 009429F8-C1C0-5872-B674-A6C2333B9647
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'deletionType' => 'DeletionType',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deletionType) {
            $res['DeletionType'] = $this->deletionType;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteAccountResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeletionType'])) {
            $model->deletionType = $map['DeletionType'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
