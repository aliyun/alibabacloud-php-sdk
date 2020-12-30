<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rdc\V20180821\Models;

use AlibabaCloud\Tea\Model;

class CreateEnterpriseShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $emailsShrink;

    /**
     * @var string
     */
    public $domain;

    /**
     * @var string
     */
    public $creatorStaffId;
    protected $_name = [
        'name'           => 'Name',
        'description'    => 'Description',
        'emailsShrink'   => 'Emails',
        'domain'         => 'Domain',
        'creatorStaffId' => 'CreatorStaffId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->emailsShrink) {
            $res['Emails'] = $this->emailsShrink;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->creatorStaffId) {
            $res['CreatorStaffId'] = $this->creatorStaffId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateEnterpriseShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Emails'])) {
            $model->emailsShrink = $map['Emails'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['CreatorStaffId'])) {
            $model->creatorStaffId = $map['CreatorStaffId'];
        }

        return $model;
    }
}
