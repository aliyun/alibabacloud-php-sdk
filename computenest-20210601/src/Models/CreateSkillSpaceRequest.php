<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNest\V20210601\Models;

use AlibabaCloud\Dara\Model;

class CreateSkillSpaceRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $skillSpaceDescription;

    /**
     * @var string
     */
    public $skillSpaceName;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'skillSpaceDescription' => 'SkillSpaceDescription',
        'skillSpaceName' => 'SkillSpaceName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->skillSpaceDescription) {
            $res['SkillSpaceDescription'] = $this->skillSpaceDescription;
        }

        if (null !== $this->skillSpaceName) {
            $res['SkillSpaceName'] = $this->skillSpaceName;
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
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['SkillSpaceDescription'])) {
            $model->skillSpaceDescription = $map['SkillSpaceDescription'];
        }

        if (isset($map['SkillSpaceName'])) {
            $model->skillSpaceName = $map['SkillSpaceName'];
        }

        return $model;
    }
}
