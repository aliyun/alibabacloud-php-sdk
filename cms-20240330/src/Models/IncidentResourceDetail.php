<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Tea\Model;

class IncidentResourceDetail extends Model
{
    /**
     * @var string
     */
    public $extraId;

    /**
     * @var mixed[]
     */
    public $resourceId;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'extraId' => 'extraId',
        'resourceId' => 'resourceId',
        'type' => 'type',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->extraId) {
            $res['extraId'] = $this->extraId;
        }
        if (null !== $this->resourceId) {
            $res['resourceId'] = $this->resourceId;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return IncidentResourceDetail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['extraId'])) {
            $model->extraId = $map['extraId'];
        }
        if (isset($map['resourceId'])) {
            $model->resourceId = $map['resourceId'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
