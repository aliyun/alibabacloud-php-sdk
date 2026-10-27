<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class CreateContactRequest extends Model
{
    /**
     * @var string
     */
    public $contactId;

    /**
     * @var string
     */
    public $email;

    /**
     * @var string[]
     */
    public $imUserIds;

    /**
     * @var string
     */
    public $lang;

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
    public $workspace;
    protected $_name = [
        'contactId' => 'contactId',
        'email' => 'email',
        'imUserIds' => 'imUserIds',
        'lang' => 'lang',
        'name' => 'name',
        'phone' => 'phone',
        'workspace' => 'workspace',
    ];

    public function validate()
    {
        if (\is_array($this->imUserIds)) {
            Model::validateArray($this->imUserIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->contactId) {
            $res['contactId'] = $this->contactId;
        }

        if (null !== $this->email) {
            $res['email'] = $this->email;
        }

        if (null !== $this->imUserIds) {
            if (\is_array($this->imUserIds)) {
                $res['imUserIds'] = [];
                foreach ($this->imUserIds as $key1 => $value1) {
                    $res['imUserIds'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->lang) {
            $res['lang'] = $this->lang;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->phone) {
            $res['phone'] = $this->phone;
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
        if (isset($map['contactId'])) {
            $model->contactId = $map['contactId'];
        }

        if (isset($map['email'])) {
            $model->email = $map['email'];
        }

        if (isset($map['imUserIds'])) {
            if (!empty($map['imUserIds'])) {
                $model->imUserIds = [];
                foreach ($map['imUserIds'] as $key1 => $value1) {
                    $model->imUserIds[$key1] = $value1;
                }
            }
        }

        if (isset($map['lang'])) {
            $model->lang = $map['lang'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['phone'])) {
            $model->phone = $map['phone'];
        }

        if (isset($map['workspace'])) {
            $model->workspace = $map['workspace'];
        }

        return $model;
    }
}
