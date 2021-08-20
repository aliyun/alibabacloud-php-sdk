<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class ImportConnectionsRequest extends Model
{
    /**
     * @var int
     */
    public $projectId;

    /**
     * @var string
     */
    public $connections;
    protected $_name = [
        'projectId'   => 'ProjectId',
        'connections' => 'Connections',
    ];

    public function validate()
    {
        Model::validateRequired('projectId', $this->projectId, true);
        Model::validateRequired('connections', $this->connections, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->connections) {
            $res['Connections'] = $this->connections;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ImportConnectionsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['Connections'])) {
            $model->connections = $map['Connections'];
        }

        return $model;
    }
}
