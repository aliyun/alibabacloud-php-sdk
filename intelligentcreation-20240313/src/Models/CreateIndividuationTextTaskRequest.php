<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models;

use AlibabaCloud\Tea\Model;

class CreateIndividuationTextTaskRequest extends Model
{
    /**
     * @var string[][]
     */
    public $crowdPack;

    /**
     * @example 840015278620459008
     *
     * @var string
     */
    public $projectId;

    /**
     * @var string
     */
    public $taskName;
    protected $_name = [
        'crowdPack' => 'crowdPack',
        'projectId' => 'projectId',
        'taskName'  => 'taskName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->crowdPack) {
            $res['crowdPack'] = $this->crowdPack;
        }
        if (null !== $this->projectId) {
            $res['projectId'] = $this->projectId;
        }
        if (null !== $this->taskName) {
            $res['taskName'] = $this->taskName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateIndividuationTextTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['crowdPack'])) {
            if (!empty($map['crowdPack'])) {
                $model->crowdPack = $map['crowdPack'];
            }
        }
        if (isset($map['projectId'])) {
            $model->projectId = $map['projectId'];
        }
        if (isset($map['taskName'])) {
            $model->taskName = $map['taskName'];
        }

        return $model;
    }
}
