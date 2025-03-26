<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models\CreateProjectResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiContent\V20240611\Models\CreateProjectResponseBody\data\projectApps;
use AlibabaCloud\SDK\AiContent\V20240611\Models\CreateProjectResponseBody\data\projectSDK;

class data extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var projectApps[]
     */
    public $projectApps;

    /**
     * @var string
     */
    public $projectId;

    /**
     * @var string
     */
    public $projectName;

    /**
     * @var projectSDK[]
     */
    public $projectSDK;

    /**
     * @var string
     */
    public $projectType;
    protected $_name = [
        'createTime' => 'CreateTime',
        'projectApps' => 'ProjectApps',
        'projectId' => 'ProjectId',
        'projectName' => 'ProjectName',
        'projectSDK' => 'ProjectSDK',
        'projectType' => 'ProjectType',
    ];

    public function validate()
    {
        if (\is_array($this->projectApps)) {
            Model::validateArray($this->projectApps);
        }
        if (\is_array($this->projectSDK)) {
            Model::validateArray($this->projectSDK);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->projectApps) {
            if (\is_array($this->projectApps)) {
                $res['ProjectApps'] = [];
                $n1 = 0;
                foreach ($this->projectApps as $item1) {
                    $res['ProjectApps'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }

        if (null !== $this->projectSDK) {
            if (\is_array($this->projectSDK)) {
                $res['ProjectSDK'] = [];
                $n1 = 0;
                foreach ($this->projectSDK as $item1) {
                    $res['ProjectSDK'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->projectType) {
            $res['ProjectType'] = $this->projectType;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['ProjectApps'])) {
            if (!empty($map['ProjectApps'])) {
                $model->projectApps = [];
                $n1 = 0;
                foreach ($map['ProjectApps'] as $item1) {
                    $model->projectApps[$n1++] = projectApps::fromMap($item1);
                }
            }
        }

        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }

        if (isset($map['ProjectSDK'])) {
            if (!empty($map['ProjectSDK'])) {
                $model->projectSDK = [];
                $n1 = 0;
                foreach ($map['ProjectSDK'] as $item1) {
                    $model->projectSDK[$n1++] = projectSDK::fromMap($item1);
                }
            }
        }

        if (isset($map['ProjectType'])) {
            $model->projectType = $map['ProjectType'];
        }

        return $model;
    }
}
