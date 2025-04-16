<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\PublishObjectListRequest;

use AlibabaCloud\Dara\Model;

class publishCommand extends Model
{
    /**
     * @var string
     */
    public $comment;

    /**
     * @var int
     */
    public $projectId;

    /**
     * @var int[]
     */
    public $submitIdList;
    protected $_name = [
        'comment' => 'Comment',
        'projectId' => 'ProjectId',
        'submitIdList' => 'SubmitIdList',
    ];

    public function validate()
    {
        if (\is_array($this->submitIdList)) {
            Model::validateArray($this->submitIdList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }

        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        if (null !== $this->submitIdList) {
            if (\is_array($this->submitIdList)) {
                $res['SubmitIdList'] = [];
                $n1 = 0;
                foreach ($this->submitIdList as $item1) {
                    $res['SubmitIdList'][$n1++] = $item1;
                }
            }
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
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }

        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        if (isset($map['SubmitIdList'])) {
            if (!empty($map['SubmitIdList'])) {
                $model->submitIdList = [];
                $n1 = 0;
                foreach ($map['SubmitIdList'] as $item1) {
                    $model->submitIdList[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
