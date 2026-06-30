<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribePolarClawSkillDetailResponseBody;

use AlibabaCloud\Dara\Model;

class owner extends Model
{
    /**
     * @var string
     */
    public $displayName;

    /**
     * @var string
     */
    public $handle;

    /**
     * @var string
     */
    public $image;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'displayName' => 'DisplayName',
        'handle' => 'Handle',
        'image' => 'Image',
        'userId' => 'UserId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }

        if (null !== $this->handle) {
            $res['Handle'] = $this->handle;
        }

        if (null !== $this->image) {
            $res['Image'] = $this->image;
        }

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
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
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }

        if (isset($map['Handle'])) {
            $model->handle = $map['Handle'];
        }

        if (isset($map['Image'])) {
            $model->image = $map['Image'];
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
