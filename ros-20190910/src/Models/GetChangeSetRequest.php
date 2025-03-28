<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Dara\Model;

class GetChangeSetRequest extends Model
{
    /**
     * @var string
     */
    public $changeSetId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var bool
     */
    public $showTemplate;
    protected $_name = [
        'changeSetId' => 'ChangeSetId',
        'regionId' => 'RegionId',
        'showTemplate' => 'ShowTemplate',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->changeSetId) {
            $res['ChangeSetId'] = $this->changeSetId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->showTemplate) {
            $res['ShowTemplate'] = $this->showTemplate;
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
        if (isset($map['ChangeSetId'])) {
            $model->changeSetId = $map['ChangeSetId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ShowTemplate'])) {
            $model->showTemplate = $map['ShowTemplate'];
        }

        return $model;
    }
}
