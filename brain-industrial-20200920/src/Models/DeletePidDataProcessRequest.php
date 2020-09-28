<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Brainindustrial\V20200920\Models;

use AlibabaCloud\Tea\Model;

class DeletePidDataProcessRequest extends Model
{
    /**
     * @var string
     */
    public $pidDataProcessId;
    protected $_name = [
        'pidDataProcessId' => 'PidDataProcessId',
    ];

    public function validate()
    {
        Model::validateRequired('pidDataProcessId', $this->pidDataProcessId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pidDataProcessId) {
            $res['PidDataProcessId'] = $this->pidDataProcessId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeletePidDataProcessRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PidDataProcessId'])) {
            $model->pidDataProcessId = $map['PidDataProcessId'];
        }

        return $model;
    }
}
