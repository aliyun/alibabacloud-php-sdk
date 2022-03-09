<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Holowatcher\V20200730\Models;

use AlibabaCloud\SDK\Holowatcher\V20200730\Models\GetCurrentUserResponseBody\menus;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\GetCurrentUserResponseBody\roles;
use AlibabaCloud\Tea\Model;

class GetCurrentUserResponseBody extends Model
{
    /**
     * @var int
     */
    public $companyId;

    /**
     * @var string
     */
    public $companyName;

    /**
     * @var string
     */
    public $email;

    /**
     * @var string
     */
    public $ext1;

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
     * @var menus[]
     */
    public $menus;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $phone;

    /**
     * @description Id of the request
     *
     * @var string
     */
    public $requestId;

    /**
     * @var roles[]
     */
    public $roles;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'companyId'   => 'CompanyId',
        'companyName' => 'CompanyName',
        'email'       => 'Email',
        'ext1'        => 'Ext1',
        'gmtCreate'   => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'id'          => 'Id',
        'menus'       => 'Menus',
        'name'        => 'Name',
        'phone'       => 'Phone',
        'requestId'   => 'RequestId',
        'roles'       => 'Roles',
        'status'      => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->companyId) {
            $res['CompanyId'] = $this->companyId;
        }
        if (null !== $this->companyName) {
            $res['CompanyName'] = $this->companyName;
        }
        if (null !== $this->email) {
            $res['Email'] = $this->email;
        }
        if (null !== $this->ext1) {
            $res['Ext1'] = $this->ext1;
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
        if (null !== $this->menus) {
            $res['Menus'] = [];
            if (null !== $this->menus && \is_array($this->menus)) {
                $n = 0;
                foreach ($this->menus as $item) {
                    $res['Menus'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->phone) {
            $res['Phone'] = $this->phone;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->roles) {
            $res['Roles'] = [];
            if (null !== $this->roles && \is_array($this->roles)) {
                $n = 0;
                foreach ($this->roles as $item) {
                    $res['Roles'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetCurrentUserResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CompanyId'])) {
            $model->companyId = $map['CompanyId'];
        }
        if (isset($map['CompanyName'])) {
            $model->companyName = $map['CompanyName'];
        }
        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }
        if (isset($map['Ext1'])) {
            $model->ext1 = $map['Ext1'];
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
        if (isset($map['Menus'])) {
            if (!empty($map['Menus'])) {
                $model->menus = [];
                $n            = 0;
                foreach ($map['Menus'] as $item) {
                    $model->menus[$n++] = null !== $item ? menus::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Phone'])) {
            $model->phone = $map['Phone'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Roles'])) {
            if (!empty($map['Roles'])) {
                $model->roles = [];
                $n            = 0;
                foreach ($map['Roles'] as $item) {
                    $model->roles[$n++] = null !== $item ? roles::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
