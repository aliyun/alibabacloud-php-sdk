<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class SearchAlertContactRequest extends Model
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
    public $currentPage;

    /**
     * @var string
     */
    public $email;

    /**
     * @var string
     */
    public $pageSize;

    /**
     * @var string
     */
    public $phone;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'contactIds'  => 'ContactIds',
        'contactName' => 'ContactName',
        'currentPage' => 'CurrentPage',
        'email'       => 'Email',
        'pageSize'    => 'PageSize',
        'phone'       => 'Phone',
        'regionId'    => 'RegionId',
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
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->email) {
            $res['Email'] = $this->email;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->phone) {
            $res['Phone'] = $this->phone;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SearchAlertContactRequest
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
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Phone'])) {
            $model->phone = $map['Phone'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
