<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Holowatcher\V20200730\Models\CompanyFindAllResponseBody;

use AlibabaCloud\SDK\Holowatcher\V20200730\Models\CompanyFindAllResponseBody\content\extraInfo;
use AlibabaCloud\Tea\Model;

class content extends Model
{
    /**
     * @var string
     */
    public $accountNums;

    /**
     * @var string
     */
    public $contactPerson;

    /**
     * @var extraInfo
     */
    public $extraInfo;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $phone;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'accountNums'   => 'AccountNums',
        'contactPerson' => 'ContactPerson',
        'extraInfo'     => 'ExtraInfo',
        'gmtCreate'     => 'GmtCreate',
        'gmtModified'   => 'GmtModified',
        'id'            => 'Id',
        'name'          => 'Name',
        'phone'         => 'Phone',
        'status'        => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountNums) {
            $res['AccountNums'] = $this->accountNums;
        }
        if (null !== $this->contactPerson) {
            $res['ContactPerson'] = $this->contactPerson;
        }
        if (null !== $this->extraInfo) {
            $res['ExtraInfo'] = null !== $this->extraInfo ? $this->extraInfo->toMap() : null;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->phone) {
            $res['Phone'] = $this->phone;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return content
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountNums'])) {
            $model->accountNums = $map['AccountNums'];
        }
        if (isset($map['ContactPerson'])) {
            $model->contactPerson = $map['ContactPerson'];
        }
        if (isset($map['ExtraInfo'])) {
            $model->extraInfo = extraInfo::fromMap($map['ExtraInfo']);
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Phone'])) {
            $model->phone = $map['Phone'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
