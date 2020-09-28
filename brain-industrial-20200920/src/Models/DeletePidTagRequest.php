<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Brainindustrial\V20200920\Models;

use AlibabaCloud\Tea\Model;

class DeletePidTagRequest extends Model
{
    /**
     * @var string
     */
    public $pidProjectId;

    /**
     * @var string
     */
    public $pidTagId;
    protected $_name = [
        'pidProjectId' => 'PidProjectId',
        'pidTagId'     => 'PidTagId',
    ];

    public function validate()
    {
        Model::validateRequired('pidProjectId', $this->pidProjectId, true);
        Model::validateRequired('pidTagId', $this->pidTagId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pidProjectId) {
            $res['PidProjectId'] = $this->pidProjectId;
        }
        if (null !== $this->pidTagId) {
            $res['PidTagId'] = $this->pidTagId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeletePidTagRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PidProjectId'])) {
            $model->pidProjectId = $map['PidProjectId'];
        }
        if (isset($map['PidTagId'])) {
            $model->pidTagId = $map['PidTagId'];
        }

        return $model;
    }
}
