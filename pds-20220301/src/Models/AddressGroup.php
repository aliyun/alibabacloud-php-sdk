<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Tea\Model;

class AddressGroup extends Model
{
    /**
     * @var Address
     */
    public $addressDetail;

    /**
     * @var int
     */
    public $count;

    /**
     * @var string
     */
    public $coverFileId;

    /**
     * @var string
     */
    public $coverUrl;

    /**
     * @var string
     */
    public $location;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'addressDetail' => 'address_detail',
        'count'         => 'count',
        'coverFileId'   => 'cover_file_id',
        'coverUrl'      => 'cover_url',
        'location'      => 'location',
        'name'          => 'name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->addressDetail) {
            $res['address_detail'] = null !== $this->addressDetail ? $this->addressDetail->toMap() : null;
        }
        if (null !== $this->count) {
            $res['count'] = $this->count;
        }
        if (null !== $this->coverFileId) {
            $res['cover_file_id'] = $this->coverFileId;
        }
        if (null !== $this->coverUrl) {
            $res['cover_url'] = $this->coverUrl;
        }
        if (null !== $this->location) {
            $res['location'] = $this->location;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddressGroup
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['address_detail'])) {
            $model->addressDetail = Address::fromMap($map['address_detail']);
        }
        if (isset($map['count'])) {
            $model->count = $map['count'];
        }
        if (isset($map['cover_file_id'])) {
            $model->coverFileId = $map['cover_file_id'];
        }
        if (isset($map['cover_url'])) {
            $model->coverUrl = $map['cover_url'];
        }
        if (isset($map['location'])) {
            $model->location = $map['location'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        return $model;
    }
}
