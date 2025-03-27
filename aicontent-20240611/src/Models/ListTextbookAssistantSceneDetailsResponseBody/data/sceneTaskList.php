<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models\ListTextbookAssistantSceneDetailsResponseBody\data;

use AlibabaCloud\Dara\Model;

class sceneTaskList extends Model
{
    /**
     * @var string
     */
    public $sceneTask;

    /**
     * @var string
     */
    public $sceneTaskTranslate;
    protected $_name = [
        'sceneTask' => 'sceneTask',
        'sceneTaskTranslate' => 'sceneTaskTranslate',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->sceneTask) {
            $res['sceneTask'] = $this->sceneTask;
        }

        if (null !== $this->sceneTaskTranslate) {
            $res['sceneTaskTranslate'] = $this->sceneTaskTranslate;
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
        if (isset($map['sceneTask'])) {
            $model->sceneTask = $map['sceneTask'];
        }

        if (isset($map['sceneTaskTranslate'])) {
            $model->sceneTaskTranslate = $map['sceneTaskTranslate'];
        }

        return $model;
    }
}
