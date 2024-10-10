<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models\GetWorksEmbedListResponseBody\result;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example YYYY-mm-DD hh:MM:ss
     *
     * @var string
     */
    public $embedTime;

    /**
     * @example 897ce25e-****-****-af84-d13c5610****
     *
     * @var string
     */
    public $worksId;

    /**
     * @var string
     */
    public $worksName;

    /**
     * @example page
     *
     * @var string
     */
    public $worksType;

    /**
     * @example 87c6b145-****-43e1-9426-8f93be23****
     *
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'embedTime'   => 'EmbedTime',
        'worksId'     => 'WorksId',
        'worksName'   => 'WorksName',
        'worksType'   => 'WorksType',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return data
     */
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
