<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Tea\Model;

class CreateSubscribedCalendarShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $managersShrink;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $subscribeScopeShrink;
    protected $_name = [
        'description'          => 'Description',
        'managersShrink'       => 'Managers',
        'name'                 => 'Name',
        'subscribeScopeShrink' => 'SubscribeScope',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->managersShrink) {
            $res['Managers'] = $this->managersShrink;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->subscribeScopeShrink) {
            $res['SubscribeScope'] = $this->subscribeScopeShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateSubscribedCalendarShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Managers'])) {
            $model->managersShrink = $map['Managers'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['SubscribeScope'])) {
            $model->subscribeScopeShrink = $map['SubscribeScope'];
        }

        return $model;
    }
}
