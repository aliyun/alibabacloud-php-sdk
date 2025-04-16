<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ResumePhysicalNodeRequest;

use AlibabaCloud\Dara\Model;

class resumeCommand extends Model
{
    /**
     * @var string[]
     */
    public $nodeIdList;

    /**
     * @var int
     */
    public $projectId;
    protected $_name = [
        'nodeIdList' => 'NodeIdList',
        'projectId' => 'ProjectId',
    ];

    public function validate()
    {
        if (\is_array($this->nodeIdList)) {
            Model::validateArray($this->nodeIdList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nodeIdList) {
            if (\is_array($this->nodeIdList)) {
                $res['NodeIdList'] = [];
                $n1 = 0;
                foreach ($this->nodeIdList as $item1) {
                    $res['NodeIdList'][$n1++] = $item1;
                }
            }
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
        if (isset($map['NodeIdList'])) {
            if (!empty($map['NodeIdList'])) {
                $model->nodeIdList = [];
                $n1 = 0;
                foreach ($map['NodeIdList'] as $item1) {
                    $model->nodeIdList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        return $model;
    }
}
