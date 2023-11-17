<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\XrEngine\V20230313\Models\PopGetAITryOnJobResponseBody;

use AlibabaCloud\SDK\XrEngine\V20230313\Models\PopGetAITryOnJobResponseBody\data\dummyProjectInfo;
use AlibabaCloud\SDK\XrEngine\V20230313\Models\PopGetAITryOnJobResponseBody\data\materialInfo;
use AlibabaCloud\SDK\XrEngine\V20230313\Models\PopGetAITryOnJobResponseBody\data\subTasks;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var dummyProjectInfo
     */
    public $dummyProjectInfo;

    /**
     * @var materialInfo
     */
    public $materialInfo;

    /**
     * @var subTasks[]
     */
    public $subTasks;
    protected $_name = [
        'dummyProjectInfo' => 'DummyProjectInfo',
        'materialInfo'     => 'MaterialInfo',
        'subTasks'         => 'SubTasks',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dummyProjectInfo) {
            $res['DummyProjectInfo'] = null !== $this->dummyProjectInfo ? $this->dummyProjectInfo->toMap() : null;
        }
        if (null !== $this->materialInfo) {
            $res['MaterialInfo'] = null !== $this->materialInfo ? $this->materialInfo->toMap() : null;
        }
        if (null !== $this->subTasks) {
            $res['SubTasks'] = [];
            if (null !== $this->subTasks && \is_array($this->subTasks)) {
                $n = 0;
                foreach ($this->subTasks as $item) {
                    $res['SubTasks'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['DummyProjectInfo'])) {
            $model->dummyProjectInfo = dummyProjectInfo::fromMap($map['DummyProjectInfo']);
        }
        if (isset($map['MaterialInfo'])) {
            $model->materialInfo = materialInfo::fromMap($map['MaterialInfo']);
        }
        if (isset($map['SubTasks'])) {
            if (!empty($map['SubTasks'])) {
                $model->subTasks = [];
                $n               = 0;
                foreach ($map['SubTasks'] as $item) {
                    $model->subTasks[$n++] = null !== $item ? subTasks::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
