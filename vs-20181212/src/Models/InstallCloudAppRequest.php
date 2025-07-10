<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\Dara\Model;

class InstallCloudAppRequest extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $projectId;

    /**
     * @var string
     */
    public $renderingInstanceId;

    /**
     * @var string[]
     */
    public $renderingInstanceIds;
    protected $_name = [
        'appId' => 'AppId',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'projectId' => 'ProjectId',
        'renderingInstanceId' => 'RenderingInstanceId',
        'renderingInstanceIds' => 'RenderingInstanceIds',
    ];

    public function validate()
    {
        if (\is_array($this->renderingInstanceIds)) {
            Model::validateArray($this->renderingInstanceIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        if (null !== $this->renderingInstanceId) {
            $res['RenderingInstanceId'] = $this->renderingInstanceId;
        }

        if (null !== $this->renderingInstanceIds) {
            if (\is_array($this->renderingInstanceIds)) {
                $res['RenderingInstanceIds'] = [];
                $n1 = 0;
                foreach ($this->renderingInstanceIds as $item1) {
                    $res['RenderingInstanceIds'][$n1] = $item1;
                    ++$n1;
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
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        if (isset($map['RenderingInstanceId'])) {
            $model->renderingInstanceId = $map['RenderingInstanceId'];
        }

        if (isset($map['RenderingInstanceIds'])) {
            if (!empty($map['RenderingInstanceIds'])) {
                $model->renderingInstanceIds = [];
                $n1 = 0;
                foreach ($map['RenderingInstanceIds'] as $item1) {
                    $model->renderingInstanceIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
