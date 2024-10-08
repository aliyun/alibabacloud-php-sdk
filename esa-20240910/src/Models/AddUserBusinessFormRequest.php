<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class AddUserBusinessFormRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $company;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $email;

    /**
     * @description 记录名称
     *
     * This parameter is required.
     * @var string
     */
    public $phoneNumber;

    /**
     * @description 记录类型
     *
     * This parameter is required.
     * @var string
     */
    public $position;

    /**
     * @var string
     */
    public $remark;

    /**
     * @description This parameter is required.
     *
     * @example AddUserBusinessForm
     *
     * @var string
     */
    public $userName;

    /**
     * @description 业务场景
     *
     * @var string
     */
    public $website;
    protected $_name = [
        'company'     => 'Company',
        'email'       => 'Email',
        'phoneNumber' => 'PhoneNumber',
        'position'    => 'Position',
        'remark'      => 'Remark',
        'userName'    => 'UserName',
        'website'     => 'Website',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->company) {
            $res['Company'] = $this->company;
        }
        if (null !== $this->email) {
            $res['Email'] = $this->email;
        }
        if (null !== $this->phoneNumber) {
            $res['PhoneNumber'] = $this->phoneNumber;
        }
        if (null !== $this->position) {
            $res['Position'] = $this->position;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }
        if (null !== $this->website) {
            $res['Website'] = $this->website;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddUserBusinessFormRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Company'])) {
            $model->company = $map['Company'];
        }
        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }
        if (isset($map['PhoneNumber'])) {
            $model->phoneNumber = $map['PhoneNumber'];
        }
        if (isset($map['Position'])) {
            $model->position = $map['Position'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }
        if (isset($map['Website'])) {
            $model->website = $map['Website'];
        }

        return $model;
    }
}
