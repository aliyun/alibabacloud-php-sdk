<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models\QueryProjectResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiContent\V20240611\Models\QueryProjectResponseBody\data\projectApps\applicationAccessIds;

class projectApps extends Model
{
    /**
     * @var applicationAccessIds[]
     */
    public $applicationAccessIds;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $projectId;
    protected $_name = [
        'applicationAccessIds' => 'ApplicationAccessIds',
        'id' => 'Id',
        'projectId' => 'ProjectId',
    ];

    public function validate()
    {
        if (\is_array($this->applicationAccessIds)) {
            Model::validateArray($this->applicationAccessIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicationAccessIds) {
            if (\is_array($this->applicationAccessIds)) {
                $res['ApplicationAccessIds'] = [];
                $n1 = 0;
                foreach ($this->applicationAccessIds as $item1) {
                    $res['ApplicationAccessIds'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApplicationAccessIds'])) {
            if (!empty($map['ApplicationAccessIds'])) {
                $model->applicationAccessIds = [];
                $n1 = 0;
                foreach ($map['ApplicationAccessIds'] as $item1) {
                    $model->applicationAccessIds[$n1++] = applicationAccessIds::fromMap($item1);
                }
            }
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        return $model;
    }
}
