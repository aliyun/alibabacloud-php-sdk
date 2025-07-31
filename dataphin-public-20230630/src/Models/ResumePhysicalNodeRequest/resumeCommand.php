<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ResumePhysicalNodeRequest;

use AlibabaCloud\Tea\Model;

class resumeCommand extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string[]
     */
    public $nodeIdList;

    /**
     * @description This parameter is required.
     *
     * @example 102011
     *
     * @var int
     */
    public $projectId;
    protected $_name = [
        'nodeIdList' => 'NodeIdList',
        'projectId' => 'ProjectId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->nodeIdList) {
            $res['NodeIdList'] = $this->nodeIdList;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resumeCommand
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NodeIdList'])) {
            if (!empty($map['NodeIdList'])) {
                $model->nodeIdList = $map['NodeIdList'];
            }
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        return $model;
    }
}
