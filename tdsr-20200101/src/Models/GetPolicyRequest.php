<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tdsr\V20200101\Models;

use AlibabaCloud\Tea\Model;

class GetPolicyRequest extends Model
{
    /**
     * @var string
     */
    public $subSceneUuid;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'subSceneUuid' => 'SubSceneUuid',
        'type'         => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->subSceneUuid) {
            $res['SubSceneUuid'] = $this->subSceneUuid;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetPolicyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SubSceneUuid'])) {
            $model->subSceneUuid = $map['SubSceneUuid'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
