<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DlfNext\V20250310\Models;

use AlibabaCloud\Dara\Model;

class Share extends Model
{
    /**
     * @var string
     */
    public $comment;

    /**
     * @var int
     */
    public $createdAt;

    /**
     * @var string
     */
    public $createdBy;

    /**
     * @var string
     */
    public $owner;

    /**
     * @var int
     */
    public $providerTenantId;

    /**
     * @var string
     */
    public $shareId;

    /**
     * @var string
     */
    public $shareName;

    /**
     * @var int
     */
    public $updatedAt;

    /**
     * @var string
     */
    public $updatedBy;
    protected $_name = [
        'comment' => 'comment',
        'createdAt' => 'createdAt',
        'createdBy' => 'createdBy',
        'owner' => 'owner',
        'providerTenantId' => 'providerTenantId',
        'shareId' => 'shareId',
        'shareName' => 'shareName',
        'updatedAt' => 'updatedAt',
        'updatedBy' => 'updatedBy',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->comment) {
            $res['comment'] = $this->comment;
        }

        if (null !== $this->createdAt) {
            $res['createdAt'] = $this->createdAt;
        }

        if (null !== $this->createdBy) {
            $res['createdBy'] = $this->createdBy;
        }

        if (null !== $this->owner) {
            $res['owner'] = $this->owner;
        }

        if (null !== $this->providerTenantId) {
            $res['providerTenantId'] = $this->providerTenantId;
        }

        if (null !== $this->shareId) {
            $res['shareId'] = $this->shareId;
        }

        if (null !== $this->shareName) {
            $res['shareName'] = $this->shareName;
        }

        if (null !== $this->updatedAt) {
            $res['updatedAt'] = $this->updatedAt;
        }

        if (null !== $this->updatedBy) {
            $res['updatedBy'] = $this->updatedBy;
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
        if (isset($map['comment'])) {
            $model->comment = $map['comment'];
        }

        if (isset($map['createdAt'])) {
            $model->createdAt = $map['createdAt'];
        }

        if (isset($map['createdBy'])) {
            $model->createdBy = $map['createdBy'];
        }

        if (isset($map['owner'])) {
            $model->owner = $map['owner'];
        }

        if (isset($map['providerTenantId'])) {
            $model->providerTenantId = $map['providerTenantId'];
        }

        if (isset($map['shareId'])) {
            $model->shareId = $map['shareId'];
        }

        if (isset($map['shareName'])) {
            $model->shareName = $map['shareName'];
        }

        if (isset($map['updatedAt'])) {
            $model->updatedAt = $map['updatedAt'];
        }

        if (isset($map['updatedBy'])) {
            $model->updatedBy = $map['updatedBy'];
        }

        return $model;
    }
}
