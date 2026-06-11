<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AISC\V20260101\Models\CreateSkillFileCheckResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AISC\V20260101\Models\CreateSkillFileCheckResponseBody\data\uploadResults;

class data extends Model
{
    /**
     * @var int
     */
    public $failCount;

    /**
     * @var string
     */
    public $rootTaskId;

    /**
     * @var int
     */
    public $successCount;

    /**
     * @var uploadResults[]
     */
    public $uploadResults;
    protected $_name = [
        'failCount' => 'FailCount',
        'rootTaskId' => 'RootTaskId',
        'successCount' => 'SuccessCount',
        'uploadResults' => 'UploadResults',
    ];

    public function validate()
    {
        if (\is_array($this->uploadResults)) {
            Model::validateArray($this->uploadResults);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->failCount) {
            $res['FailCount'] = $this->failCount;
        }

        if (null !== $this->rootTaskId) {
            $res['RootTaskId'] = $this->rootTaskId;
        }

        if (null !== $this->successCount) {
            $res['SuccessCount'] = $this->successCount;
        }

        if (null !== $this->uploadResults) {
            if (\is_array($this->uploadResults)) {
                $res['UploadResults'] = [];
                $n1 = 0;
                foreach ($this->uploadResults as $item1) {
                    $res['UploadResults'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['FailCount'])) {
            $model->failCount = $map['FailCount'];
        }

        if (isset($map['RootTaskId'])) {
            $model->rootTaskId = $map['RootTaskId'];
        }

        if (isset($map['SuccessCount'])) {
            $model->successCount = $map['SuccessCount'];
        }

        if (isset($map['UploadResults'])) {
            if (!empty($map['UploadResults'])) {
                $model->uploadResults = [];
                $n1 = 0;
                foreach ($map['UploadResults'] as $item1) {
                    $model->uploadResults[$n1] = uploadResults::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
