<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tdsr\V20200101\Models;

use AlibabaCloud\Tea\Model;

class SaveHotspotTagRequest extends Model
{
    /**
     * @var string
     */
    public $paramTag;

    /**
     * @var string
     */
    public $subSceneUuid;
    protected $_name = [
        'paramTag'     => 'ParamTag',
        'subSceneUuid' => 'SubSceneUuid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->paramTag) {
            $res['ParamTag'] = $this->paramTag;
        }
        if (null !== $this->subSceneUuid) {
            $res['SubSceneUuid'] = $this->subSceneUuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SaveHotspotTagRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ParamTag'])) {
            $model->paramTag = $map['ParamTag'];
        }
        if (isset($map['SubSceneUuid'])) {
            $model->subSceneUuid = $map['SubSceneUuid'];
        }

        return $model;
    }
}
