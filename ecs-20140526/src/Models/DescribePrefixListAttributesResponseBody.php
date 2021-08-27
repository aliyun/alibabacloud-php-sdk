<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribePrefixListAttributesResponseBody\entries;
use AlibabaCloud\Tea\Model;

class DescribePrefixListAttributesResponseBody extends Model
{
    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var int
     */
    public $maxEntries;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $addressFamily;

    /**
     * @var string
     */
    public $prefixListName;

    /**
     * @var string
     */
    public $prefixListId;

    /**
     * @var entries
     */
    public $entries;
    protected $_name = [
        'creationTime'   => 'CreationTime',
        'maxEntries'     => 'MaxEntries',
        'requestId'      => 'RequestId',
        'description'    => 'Description',
        'addressFamily'  => 'AddressFamily',
        'prefixListName' => 'PrefixListName',
        'prefixListId'   => 'PrefixListId',
        'entries'        => 'Entries',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->maxEntries) {
            $res['MaxEntries'] = $this->maxEntries;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->addressFamily) {
            $res['AddressFamily'] = $this->addressFamily;
        }
        if (null !== $this->prefixListName) {
            $res['PrefixListName'] = $this->prefixListName;
        }
        if (null !== $this->prefixListId) {
            $res['PrefixListId'] = $this->prefixListId;
        }
        if (null !== $this->entries) {
            $res['Entries'] = null !== $this->entries ? $this->entries->toMap() : null;
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
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['MaxEntries'])) {
            $model->maxEntries = $map['MaxEntries'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['AddressFamily'])) {
            $model->addressFamily = $map['AddressFamily'];
        }
        if (isset($map['PrefixListName'])) {
            $model->prefixListName = $map['PrefixListName'];
        }
        if (isset($map['PrefixListId'])) {
            $model->prefixListId = $map['PrefixListId'];
        }
        if (isset($map['Entries'])) {
            $model->entries = entries::fromMap($map['Entries']);
        }

        return $model;
    }
}
