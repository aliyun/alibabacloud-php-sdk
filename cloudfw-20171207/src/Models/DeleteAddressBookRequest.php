<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Tea\Model;

class DeleteAddressBookRequest extends Model
{
    /**
     * @description The ID of the address book.
     *
     * To delete the address book, you must provide the ID of the address book. You can call the DescribeAddressBook operation to query the ID.
     * @example 0657ab9d-fe8b-4174-b2a6-6baf358e****
     *
     * @var string
     */
    public $groupUuid;

    /**
     * @description The natural language of the request and response. Valid values:
     *
     *   **zh**: Chinese (default)
     *   **en**: English
     *
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @description The source IP address of the request.
     *
     * @example 192.0.XX.XX
     *
     * @deprecated
     *
     * @var string
     */
    public $sourceIp;
    protected $_name = [
        'groupUuid' => 'GroupUuid',
        'lang'      => 'Lang',
        'sourceIp'  => 'SourceIp',
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
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteAddressBookRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GroupUuid'])) {
            $model->groupUuid = $map['GroupUuid'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }

        return $model;
    }
}
