<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ram\V20150501\Models\ListEntitiesForPolicyResponseBody\groups;

use AlibabaCloud\Dara\Model;

class group extends Model
{
    /**
     * @var string
     */
    public $attachDate;

    /**
     * @var string
     */
    public $comments;

    /**
     * @var string
     */
    public $groupName;
    protected $_name = [
        'attachDate' => 'AttachDate',
        'comments' => 'Comments',
        'groupName' => 'GroupName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attachDate) {
            $res['AttachDate'] = $this->attachDate;
        }

        if (null !== $this->comments) {
            $res['Comments'] = $this->comments;
        }

        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
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
        if (isset($map['AttachDate'])) {
            $model->attachDate = $map['AttachDate'];
        }

        if (isset($map['Comments'])) {
            $model->comments = $map['Comments'];
        }

        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }

        return $model;
    }
}
