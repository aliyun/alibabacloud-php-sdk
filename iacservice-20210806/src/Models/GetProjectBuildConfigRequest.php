<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models;

use AlibabaCloud\Tea\Model;

class GetProjectBuildConfigRequest extends Model
{
    /**
     * @var string
     */
    public $projectBuildId;
    protected $_name = [
        'projectBuildId' => 'projectBuildId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->projectBuildId) {
            $res['projectBuildId'] = $this->projectBuildId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetProjectBuildConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['projectBuildId'])) {
            $model->projectBuildId = $map['projectBuildId'];
        }

        return $model;
    }
}
