<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class DesensitizeDataRequest extends Model
{
    /**
     * @description The data that you want to mask.
     *
     * This parameter is required.
     * @example 15365291784
     *
     * @var string
     */
    public $data;

    /**
     * @description The code of the data masking scene. You can view the code on the Data Masking page in Data Security Guard of the DataWorks console.
     *
     * This parameter is required.
     * @example _default_scene_code
     *
     * @var string
     */
    public $sceneCode;
    protected $_name = [
        'data'      => 'Data',
        'sceneCode' => 'SceneCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->data) {
            $res['Data'] = $this->data;
        }
        if (null !== $this->sceneCode) {
            $res['SceneCode'] = $this->sceneCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DesensitizeDataRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Data'])) {
            $model->data = $map['Data'];
        }
        if (isset($map['SceneCode'])) {
            $model->sceneCode = $map['SceneCode'];
        }

        return $model;
    }
}
