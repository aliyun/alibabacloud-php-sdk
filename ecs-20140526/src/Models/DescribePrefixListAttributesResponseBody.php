<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribePrefixListAttributesResponseBody\entries;
use AlibabaCloud\Tea\Model;

class DescribePrefixListAttributesResponseBody extends Model
{
    /**
     * @description The IP address family of the prefix list. Valid values:
     *
     *   IPv4
     *   IPv6
     *
     * @example IPv4
     *
     * @var string
     */
    public $addressFamily;

    /**
     * @description The time when the prefix list was created.
     *
     * @example 2021-02-20T07:11Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The description of the prefix list.
     *
     * @example This is description.
     *
     * @var string
     */
    public $description;

    /**
     * @description Details about the entries in the prefix list.
     *
     * @var entries
     */
    public $entries;

    /**
     * @description The maximum number of entries that the prefix list can contain.
     *
     * @example 10
     *
     * @var int
     */
    public $maxEntries;

    /**
     * @description The ID of the prefix list.
     *
     * @example pl-x1j1k5ykzqlixdcy****
     *
     * @var string
     */
    public $prefixListId;

    /**
     * @description The name of the prefix list.
     *
     * @example PrefixListNameSample
     *
     * @var string
     */
    public $prefixListName;

    /**
     * @description The ID of the request.
     *
     * @example 38793DB8-A4B2-4AEC-BFD3-111234E9188D
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'addressFamily'  => 'AddressFamily',
        'creationTime'   => 'CreationTime',
        'description'    => 'Description',
        'entries'        => 'Entries',
        'maxEntries'     => 'MaxEntries',
        'prefixListId'   => 'PrefixListId',
        'prefixListName' => 'PrefixListName',
        'requestId'      => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->addressFamily) {
            $res['AddressFamily'] = $this->addressFamily;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->entries) {
            $res['Entries'] = null !== $this->entries ? $this->entries->toMap() : null;
        }
        if (null !== $this->maxEntries) {
            $res['MaxEntries'] = $this->maxEntries;
        }
        if (null !== $this->prefixListId) {
            $res['PrefixListId'] = $this->prefixListId;
        }
        if (null !== $this->prefixListName) {
            $res['PrefixListName'] = $this->prefixListName;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribePrefixListAttributesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AddressFamily'])) {
            $model->addressFamily = $map['AddressFamily'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Entries'])) {
            $model->entries = entries::fromMap($map['Entries']);
        }
        if (isset($map['MaxEntries'])) {
            $model->maxEntries = $map['MaxEntries'];
        }
        if (isset($map['PrefixListId'])) {
            $model->prefixListId = $map['PrefixListId'];
        }
        if (isset($map['PrefixListName'])) {
            $model->prefixListName = $map['PrefixListName'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
