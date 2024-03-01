<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Tea\Model;

class AddAddressBookResponseBody extends Model
{
    /**
     * @description The UUID of the returned address book.
     *
     * @example f04ac7ce-628b-4cb7-be61-310222b7****
     *
     * @var string
     */
    public $groupUuid;

    /**
     * @description The request ID.
     *
     * @example CBF1E9B7-D6A0-4E9E-AD3E-2B47E6C2****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'groupUuid' => 'GroupUuid',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupUuid) {
            $res['GroupUuid'] = $this->groupUuid;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddAddressBookResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GroupUuid'])) {
            $model->groupUuid = $map['GroupUuid'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
