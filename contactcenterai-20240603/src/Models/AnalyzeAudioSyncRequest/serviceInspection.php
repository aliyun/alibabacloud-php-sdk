<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ContactCenterAI\V20240603\Models\AnalyzeAudioSyncRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ContactCenterAI\V20240603\Models\AnalyzeAudioSyncRequest\serviceInspection\inspectionContents;

class serviceInspection extends Model
{
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
        'inspectionContents' => 'inspectionContents',
        'inspectionIntroduction' => 'inspectionIntroduction',
        'sceneIntroduction' => 'sceneIntroduction',
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
        if (null !== $this->inspectionContents) {
            if (\is_array($this->inspectionContents)) {
                $res['inspectionContents'] = [];
                $n1 = 0;
                foreach ($this->inspectionContents as $item1) {
                    $res['inspectionContents'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->inspectionIntroduction) {
            $res['inspectionIntroduction'] = $this->inspectionIntroduction;
        }

        if (null !== $this->sceneIntroduction) {
            $res['sceneIntroduction'] = $this->sceneIntroduction;
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
        if (isset($map['inspectionContents'])) {
            if (!empty($map['inspectionContents'])) {
                $model->inspectionContents = [];
                $n1 = 0;
                foreach ($map['inspectionContents'] as $item1) {
                    $model->inspectionContents[$n1++] = inspectionContents::fromMap($item1);
                }
            }
        }

        if (isset($map['inspectionIntroduction'])) {
            $model->inspectionIntroduction = $map['inspectionIntroduction'];
        }

        if (isset($map['sceneIntroduction'])) {
            $model->sceneIntroduction = $map['sceneIntroduction'];
        }

        return $model;
    }
}
