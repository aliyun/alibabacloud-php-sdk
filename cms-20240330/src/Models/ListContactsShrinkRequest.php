<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class ListContactsShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $contactIdsShrink;

    /**
     * @var string
     */
    public $email;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $phone;

    /**
     * @var bool
     */
    public $queryUngroupedContacts;

    /**
     * @var string
     */
    public $workspace;
    protected $_name = [
        'contactIdsShrink' => 'contactIds',
        'email' => 'email',
        'groupId' => 'groupId',
        'name' => 'name',
        'pageNumber' => 'pageNumber',
        'pageSize' => 'pageSize',
        'phone' => 'phone',
        'queryUngroupedContacts' => 'queryUngroupedContacts',
        'workspace' => 'workspace',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->contactIdsShrink) {
            $res['contactIds'] = $this->contactIdsShrink;
        }

        if (null !== $this->email) {
            $res['email'] = $this->email;
        }

        if (null !== $this->groupId) {
            $res['groupId'] = $this->groupId;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->pageNumber) {
            $res['pageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }

        if (null !== $this->phone) {
            $res['phone'] = $this->phone;
        }

        if (null !== $this->queryUngroupedContacts) {
            $res['queryUngroupedContacts'] = $this->queryUngroupedContacts;
        }

        if (null !== $this->workspace) {
            $res['workspace'] = $this->workspace;
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
        if (isset($map['contactIds'])) {
            $model->contactIdsShrink = $map['contactIds'];
        }

        if (isset($map['email'])) {
            $model->email = $map['email'];
        }

        if (isset($map['groupId'])) {
            $model->groupId = $map['groupId'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['pageNumber'])) {
            $model->pageNumber = $map['pageNumber'];
        }

        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }

        if (isset($map['phone'])) {
            $model->phone = $map['phone'];
        }

        if (isset($map['queryUngroupedContacts'])) {
            $model->queryUngroupedContacts = $map['queryUngroupedContacts'];
        }

        if (isset($map['workspace'])) {
            $model->workspace = $map['workspace'];
        }

        return $model;
    }
}
