<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPServerless\V20190615\Models;

use AlibabaCloud\Tea\Model;

class UpdateHttpTriggerConfigRequest extends Model
{
    /**
     * @var bool
     */
    public $enableService;

    /**
     * @var string
     */
    public $spaceId;
    protected $_name = [
        'enableService' => 'EnableService',
        'spaceId'       => 'SpaceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->enableService) {
            $res['EnableService'] = $this->enableService;
        }
        if (null !== $this->spaceId) {
            $res['SpaceId'] = $this->spaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateHttpTriggerConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EnableService'])) {
            $model->enableService = $map['EnableService'];
        }
        if (isset($map['SpaceId'])) {
            $model->spaceId = $map['SpaceId'];
        }

        return $model;
    }
}
