<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ContactCenterAI\V20240603\Models\CreateTaskRequest;

use AlibabaCloud\SDK\ContactCenterAI\V20240603\Models\CreateTaskRequest\serviceInspection\inspectionContents;
use AlibabaCloud\Tea\Model;

class serviceInspection extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var inspectionContents[]
     */
    public $inspectionContents;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $inspectionIntroduction;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $sceneIntroduction;
    protected $_name = [
        'inspectionContents'     => 'inspectionContents',
        'inspectionIntroduction' => 'inspectionIntroduction',
        'sceneIntroduction'      => 'sceneIntroduction',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->inspectionContents) {
            $res['inspectionContents'] = [];
            if (null !== $this->inspectionContents && \is_array($this->inspectionContents)) {
                $n = 0;
                foreach ($this->inspectionContents as $item) {
                    $res['inspectionContents'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return serviceInspection
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['inspectionContents'])) {
            if (!empty($map['inspectionContents'])) {
                $model->inspectionContents = [];
                $n                         = 0;
                foreach ($map['inspectionContents'] as $item) {
                    $model->inspectionContents[$n++] = null !== $item ? inspectionContents::fromMap($item) : $item;
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
