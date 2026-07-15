<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;

class AddUserBusinessFormRequest extends Model
{
    /**
     * @var string
     */
    public $company;

    /**
     * @var string
     */
    public $email;

    /**
     * @var string
     */
    public $phoneNumber;

    /**
     * @var string
     */
    public $position;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var string
     */
    public $userName;

    /**
     * @var string
     */
    public $website;
    protected $_name = [
        'company' => 'Company',
        'email' => 'Email',
        'phoneNumber' => 'PhoneNumber',
        'position' => 'Position',
        'remark' => 'Remark',
        'userName' => 'UserName',
        'website' => 'Website',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
