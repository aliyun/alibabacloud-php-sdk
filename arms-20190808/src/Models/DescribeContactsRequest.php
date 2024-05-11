<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class DescribeContactsRequest extends Model
{
    /**
     * @description The ID of the alert contact that you want to query. Separate multiple contact IDs with spaces.
     *
     * @example 123,321
     *
     * @var string
     */
    public $contactIds;

    /**
     * @description The name of the alert contact.
     *
     * @example John Doe
     *
     * @var string
     */
    public $contactName;

    /**
     * @description The email address of the alert contact.
     *
     * @example someone@example.com
     *
     * @var string
     */
    public $email;

    /**
     * @description The number of the page to return.
     *
     * This parameter is required.
     * @example 1
     *
     * @var int
     */
    public $page;

    /**
     * @description The mobile number of the alert contact.
     *
     * @example 1381111*****
     *
     * @var string
     */
    public $phone;

    /**
     * @description The region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The number of alert contacts to return on each page.
     *
     * This parameter is required.
     * @example 20
     *
     * @var int
     */
    public $size;

    /**
     * @description Specifies whether to return redundant information.
     *
     * @example true
     *
     * @var string
     */
    public $verbose;
    protected $_name = [
        'contactIds'  => 'ContactIds',
        'contactName' => 'ContactName',
        'email'       => 'Email',
        'page'        => 'Page',
        'phone'       => 'Phone',
        'regionId'    => 'RegionId',
        'size'        => 'Size',
        'verbose'     => 'Verbose',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return DescribeContactsRequest
     */
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
