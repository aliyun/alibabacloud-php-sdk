<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\StartCloudNoteRequest;

use AlibabaCloud\SDK\Rtc\V20180111\Models\StartCloudNoteRequest\serviceInspection\inspectionContents;
use AlibabaCloud\Tea\Model;

class serviceInspection extends Model
{
    /**
     * @var bool
     */
    public $enabled;

    /**
     * @description This parameter is required.
     *
     * @var inspectionContents[]
     */
    public $inspectionContents;

    /**
     * @description This parameter is required.
     *
     * @example 请监测对话中销售人员表现是否接待热情、态度良好
     *
     * @var string
     */
    public $inspectionIntroduction;

    /**
     * @description This parameter is required.
     *
     * @example 汽车门店线下销售场景
     *
     * @var string
     */
    public $sceneIntroduction;
    protected $_name = [
        'enabled'                => 'Enabled',
        'inspectionContents'     => 'InspectionContents',
        'inspectionIntroduction' => 'InspectionIntroduction',
        'sceneIntroduction'      => 'SceneIntroduction',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }
        if (null !== $this->inspectionContents) {
            $res['InspectionContents'] = [];
            if (null !== $this->inspectionContents && \is_array($this->inspectionContents)) {
                $n = 0;
                foreach ($this->inspectionContents as $item) {
                    $res['InspectionContents'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->inspectionIntroduction) {
            $res['InspectionIntroduction'] = $this->inspectionIntroduction;
        }
        if (null !== $this->sceneIntroduction) {
            $res['SceneIntroduction'] = $this->sceneIntroduction;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return serviceInspection
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }
        if (isset($map['InspectionContents'])) {
            if (!empty($map['InspectionContents'])) {
                $model->inspectionContents = [];
                $n                         = 0;
                foreach ($map['InspectionContents'] as $item) {
                    $model->inspectionContents[$n++] = null !== $item ? inspectionContents::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['InspectionIntroduction'])) {
            $model->inspectionIntroduction = $map['InspectionIntroduction'];
        }
        if (isset($map['SceneIntroduction'])) {
            $model->sceneIntroduction = $map['SceneIntroduction'];
        }

        return $model;
    }
}
