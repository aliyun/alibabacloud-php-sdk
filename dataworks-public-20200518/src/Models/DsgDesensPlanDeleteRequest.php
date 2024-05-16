<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class DsgDesensPlanDeleteRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var int[]
     */
    public $ids;

    /**
     * @description This parameter is required.
     *
     * @example dataworks_display_desense_code
     *
     * @var string
     */
    public $sceneCode;
    protected $_name = [
        'ids'       => 'Ids',
        'sceneCode' => 'SceneCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ids) {
            $res['Ids'] = $this->ids;
        }
        if (null !== $this->sceneCode) {
            $res['SceneCode'] = $this->sceneCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DsgDesensPlanDeleteRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Ids'])) {
            if (!empty($map['Ids'])) {
                $model->ids = $map['Ids'];
            }
        }
        if (isset($map['SceneCode'])) {
            $model->sceneCode = $map['SceneCode'];
        }

        return $model;
    }
}
