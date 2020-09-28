<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Brainindustrial\V20200920\Models;

use AlibabaCloud\Tea\Model;

class DeletePidProjectRequest extends Model
{
    /**
     * @var string
     */
    public $pidProjectId;
    protected $_name = [
        'pidProjectId' => 'PidProjectId',
    ];

    public function validate()
    {
        Model::validateRequired('pidProjectId', $this->pidProjectId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pidProjectId) {
            $res['PidProjectId'] = $this->pidProjectId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeletePidProjectRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PidProjectId'])) {
            $model->pidProjectId = $map['PidProjectId'];
        }

        return $model;
    }
}
