<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models\GetWorksEmbedListResponseBody\result;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $embedTime;

    /**
     * @var string
     */
    public $worksId;

    /**
     * @var string
     */
    public $worksName;

    /**
     * @var string
     */
    public $worksType;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'embedTime' => 'EmbedTime',
        'worksId' => 'WorksId',
        'worksName' => 'WorksName',
        'worksType' => 'WorksType',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->embedTime) {
            $res['EmbedTime'] = $this->embedTime;
        }

        if (null !== $this->worksId) {
            $res['WorksId'] = $this->worksId;
        }

        if (null !== $this->worksName) {
            $res['WorksName'] = $this->worksName;
        }

        if (null !== $this->worksType) {
            $res['WorksType'] = $this->worksType;
        }

        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
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
        if (isset($map['EmbedTime'])) {
            $model->embedTime = $map['EmbedTime'];
        }

        if (isset($map['WorksId'])) {
            $model->worksId = $map['WorksId'];
        }

        if (isset($map['WorksName'])) {
            $model->worksName = $map['WorksName'];
        }

        if (isset($map['WorksType'])) {
            $model->worksType = $map['WorksType'];
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
