<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aidge\V20260428\Models\ImageTranslationProResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aidge\V20260428\Models\ImageTranslationProResponseBody\data\genFiles;
use AlibabaCloud\SDK\Aidge\V20260428\Models\ImageTranslationProResponseBody\data\resultList;

class data extends Model
{
    /**
     * @var genFiles[]
     */
    public $genFiles;

    /**
     * @var resultList[]
     */
    public $resultList;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var int[]
     */
    public $usageMap;
    protected $_name = [
        'genFiles' => 'GenFiles',
        'resultList' => 'ResultList',
        'taskId' => 'TaskId',
        'usageMap' => 'UsageMap',
    ];

    public function validate()
    {
        if (\is_array($this->genFiles)) {
            Model::validateArray($this->genFiles);
        }
        if (\is_array($this->resultList)) {
            Model::validateArray($this->resultList);
        }
        if (\is_array($this->usageMap)) {
            Model::validateArray($this->usageMap);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->genFiles) {
            if (\is_array($this->genFiles)) {
                $res['GenFiles'] = [];
                $n1 = 0;
                foreach ($this->genFiles as $item1) {
                    $res['GenFiles'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->resultList) {
            if (\is_array($this->resultList)) {
                $res['ResultList'] = [];
                $n1 = 0;
                foreach ($this->resultList as $item1) {
                    $res['ResultList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        if (null !== $this->usageMap) {
            if (\is_array($this->usageMap)) {
                $res['UsageMap'] = [];
                foreach ($this->usageMap as $key1 => $value1) {
                    $res['UsageMap'][$key1] = $value1;
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
        if (isset($map['GenFiles'])) {
            if (!empty($map['GenFiles'])) {
                $model->genFiles = [];
                $n1 = 0;
                foreach ($map['GenFiles'] as $item1) {
                    $model->genFiles[$n1] = genFiles::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ResultList'])) {
            if (!empty($map['ResultList'])) {
                $model->resultList = [];
                $n1 = 0;
                foreach ($map['ResultList'] as $item1) {
                    $model->resultList[$n1] = resultList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        if (isset($map['UsageMap'])) {
            if (!empty($map['UsageMap'])) {
                $model->usageMap = [];
                foreach ($map['UsageMap'] as $key1 => $value1) {
                    $model->usageMap[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
