<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\StartCloudNoteRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rtc\V20180111\Models\StartCloudNoteRequest\serviceInspection\inspectionContents;

class serviceInspection extends Model
{
    /**
     * @var bool
     */
    public $enabled;

    /**
     * @var inspectionContents[]
     */
    public $inspectionContents;

    /**
     * @var string
     */
    public $inspectionIntroduction;

    /**
     * @var string
     */
    public $sceneIntroduction;
    protected $_name = [
        'enabled' => 'Enabled',
        'inspectionContents' => 'InspectionContents',
        'inspectionIntroduction' => 'InspectionIntroduction',
        'sceneIntroduction' => 'SceneIntroduction',
    ];

    public function validate()
    {
        if (\is_array($this->inspectionContents)) {
            Model::validateArray($this->inspectionContents);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }

        if (null !== $this->inspectionContents) {
            if (\is_array($this->inspectionContents)) {
                $res['InspectionContents'] = [];
                $n1 = 0;
                foreach ($this->inspectionContents as $item1) {
                    $res['InspectionContents'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }

        if (isset($map['InspectionContents'])) {
            if (!empty($map['InspectionContents'])) {
                $model->inspectionContents = [];
                $n1 = 0;
                foreach ($map['InspectionContents'] as $item1) {
                    $model->inspectionContents[$n1++] = inspectionContents::fromMap($item1);
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
