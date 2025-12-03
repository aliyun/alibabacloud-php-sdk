<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\OpenStructSaseUser;

use AlibabaCloud\Dara\Model;

class userTags extends Model
{
    /**
     * @var string
     */
    public $aliuid;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $saseUserId;

    /**
     * @var string
     */
    public $tagId;
    protected $_name = [
        'aliuid' => 'Aliuid',
        'description' => 'Description',
        'name' => 'Name',
        'saseUserId' => 'SaseUserId',
        'tagId' => 'TagId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aliuid) {
            $res['Aliuid'] = $this->aliuid;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->saseUserId) {
            $res['SaseUserId'] = $this->saseUserId;
        }

        if (null !== $this->tagId) {
            $res['TagId'] = $this->tagId;
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
        if (isset($map['Aliuid'])) {
            $model->aliuid = $map['Aliuid'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['SaseUserId'])) {
            $model->saseUserId = $map['SaseUserId'];
        }

        if (isset($map['TagId'])) {
            $model->tagId = $map['TagId'];
        }

        return $model;
    }
}
