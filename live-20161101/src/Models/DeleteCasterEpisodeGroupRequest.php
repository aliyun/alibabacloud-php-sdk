<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class DeleteCasterEpisodeGroupRequest extends Model
{
    /**
     * @var string
     */
    public $programId;
    protected $_name = [
        'programId' => 'ProgramId',
    ];

    public function validate()
    {
        Model::validateRequired('programId', $this->programId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->programId) {
            $res['ProgramId'] = $this->programId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteCasterEpisodeGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProgramId'])) {
            $model->programId = $map['ProgramId'];
        }

        return $model;
    }
}
