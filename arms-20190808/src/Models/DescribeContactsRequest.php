<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Dara\Model;

class DescribeContactsRequest extends Model
{
    /**
     * @var string
     */
    public $contactIds;

    /**
     * @var string
     */
    public $contactName;

    /**
     * @var string
     */
    public $email;

    /**
     * @var int
     */
    public $page;

    /**
     * @var string
     */
    public $phone;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $size;

    /**
     * @var string
     */
    public $verbose;
    protected $_name = [
        'contactIds' => 'ContactIds',
        'contactName' => 'ContactName',
        'email' => 'Email',
        'page' => 'Page',
        'phone' => 'Phone',
        'regionId' => 'RegionId',
        'size' => 'Size',
        'verbose' => 'Verbose',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->contactIds) {
            $res['ContactIds'] = $this->contactIds;
        }

        if (null !== $this->contactName) {
            $res['ContactName'] = $this->contactName;
        }

        if (null !== $this->email) {
            $res['Email'] = $this->email;
        }

        if (null !== $this->page) {
            $res['Page'] = $this->page;
        }

        if (null !== $this->phone) {
            $res['Phone'] = $this->phone;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }

        if (null !== $this->verbose) {
            $res['Verbose'] = $this->verbose;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContactIds'])) {
            $model->contactIds = $map['ContactIds'];
        }

        if (isset($map['ContactName'])) {
            $model->contactName = $map['ContactName'];
        }

        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }

        if (isset($map['Page'])) {
            $model->page = $map['Page'];
        }

        if (isset($map['Phone'])) {
            $model->phone = $map['Phone'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }

        if (isset($map['Verbose'])) {
            $model->verbose = $map['Verbose'];
        }

        return $model;
    }
}
