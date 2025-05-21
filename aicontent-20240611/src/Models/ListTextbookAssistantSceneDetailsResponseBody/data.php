<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models\ListTextbookAssistantSceneDetailsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ListTextbookAssistantSceneDetailsResponseBody\data\roleList;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ListTextbookAssistantSceneDetailsResponseBody\data\sceneTaskList;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ListTextbookAssistantSceneDetailsResponseBody\data\sentenceList;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ListTextbookAssistantSceneDetailsResponseBody\data\theme;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ListTextbookAssistantSceneDetailsResponseBody\data\topic;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ListTextbookAssistantSceneDetailsResponseBody\data\wordList;

class data extends Model
{
    /**
     * @var roleList[]
     */
    public $roleList;

    /**
     * @var string
     */
    public $scene;

    /**
     * @var string
     */
    public $sceneId;

    /**
     * @var string[]
     */
    public $sceneImageList;

    /**
     * @var sceneTaskList[]
     */
    public $sceneTaskList;

    /**
     * @var string
     */
    public $sceneTranslate;

    /**
     * @var sentenceList[]
     */
    public $sentenceList;

    /**
     * @var string
     */
    public $target;

    /**
     * @var theme
     */
    public $theme;

    /**
     * @var topic
     */
    public $topic;

    /**
     * @var wordList[]
     */
    public $wordList;
    protected $_name = [
        'roleList' => 'roleList',
        'scene' => 'scene',
        'sceneId' => 'sceneId',
        'sceneImageList' => 'sceneImageList',
        'sceneTaskList' => 'sceneTaskList',
        'sceneTranslate' => 'sceneTranslate',
        'sentenceList' => 'sentenceList',
        'target' => 'target',
        'theme' => 'theme',
        'topic' => 'topic',
        'wordList' => 'wordList',
    ];

    public function validate()
    {
        if (\is_array($this->roleList)) {
            Model::validateArray($this->roleList);
        }
        if (\is_array($this->sceneImageList)) {
            Model::validateArray($this->sceneImageList);
        }
        if (\is_array($this->sceneTaskList)) {
            Model::validateArray($this->sceneTaskList);
        }
        if (\is_array($this->sentenceList)) {
            Model::validateArray($this->sentenceList);
        }
        if (null !== $this->theme) {
            $this->theme->validate();
        }
        if (null !== $this->topic) {
            $this->topic->validate();
        }
        if (\is_array($this->wordList)) {
            Model::validateArray($this->wordList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->roleList) {
            if (\is_array($this->roleList)) {
                $res['roleList'] = [];
                $n1 = 0;
                foreach ($this->roleList as $item1) {
                    $res['roleList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->scene) {
            $res['scene'] = $this->scene;
        }

        if (null !== $this->sceneId) {
            $res['sceneId'] = $this->sceneId;
        }

        if (null !== $this->sceneImageList) {
            if (\is_array($this->sceneImageList)) {
                $res['sceneImageList'] = [];
                $n1 = 0;
                foreach ($this->sceneImageList as $item1) {
                    $res['sceneImageList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->sceneTaskList) {
            if (\is_array($this->sceneTaskList)) {
                $res['sceneTaskList'] = [];
                $n1 = 0;
                foreach ($this->sceneTaskList as $item1) {
                    $res['sceneTaskList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->sceneTranslate) {
            $res['sceneTranslate'] = $this->sceneTranslate;
        }

        if (null !== $this->sentenceList) {
            if (\is_array($this->sentenceList)) {
                $res['sentenceList'] = [];
                $n1 = 0;
                foreach ($this->sentenceList as $item1) {
                    $res['sentenceList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->target) {
            $res['target'] = $this->target;
        }

        if (null !== $this->theme) {
            $res['theme'] = null !== $this->theme ? $this->theme->toArray($noStream) : $this->theme;
        }

        if (null !== $this->topic) {
            $res['topic'] = null !== $this->topic ? $this->topic->toArray($noStream) : $this->topic;
        }

        if (null !== $this->wordList) {
            if (\is_array($this->wordList)) {
                $res['wordList'] = [];
                $n1 = 0;
                foreach ($this->wordList as $item1) {
                    $res['wordList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['roleList'])) {
            if (!empty($map['roleList'])) {
                $model->roleList = [];
                $n1 = 0;
                foreach ($map['roleList'] as $item1) {
                    $model->roleList[$n1++] = roleList::fromMap($item1);
                }
            }
        }

        if (isset($map['scene'])) {
            $model->scene = $map['scene'];
        }

        if (isset($map['sceneId'])) {
            $model->sceneId = $map['sceneId'];
        }

        if (isset($map['sceneImageList'])) {
            if (!empty($map['sceneImageList'])) {
                $model->sceneImageList = [];
                $n1 = 0;
                foreach ($map['sceneImageList'] as $item1) {
                    $model->sceneImageList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['sceneTaskList'])) {
            if (!empty($map['sceneTaskList'])) {
                $model->sceneTaskList = [];
                $n1 = 0;
                foreach ($map['sceneTaskList'] as $item1) {
                    $model->sceneTaskList[$n1++] = sceneTaskList::fromMap($item1);
                }
            }
        }

        if (isset($map['sceneTranslate'])) {
            $model->sceneTranslate = $map['sceneTranslate'];
        }

        if (isset($map['sentenceList'])) {
            if (!empty($map['sentenceList'])) {
                $model->sentenceList = [];
                $n1 = 0;
                foreach ($map['sentenceList'] as $item1) {
                    $model->sentenceList[$n1++] = sentenceList::fromMap($item1);
                }
            }
        }

        if (isset($map['target'])) {
            $model->target = $map['target'];
        }

        if (isset($map['theme'])) {
            $model->theme = theme::fromMap($map['theme']);
        }

        if (isset($map['topic'])) {
            $model->topic = topic::fromMap($map['topic']);
        }

        if (isset($map['wordList'])) {
            if (!empty($map['wordList'])) {
                $model->wordList = [];
                $n1 = 0;
                foreach ($map['wordList'] as $item1) {
                    $model->wordList[$n1++] = wordList::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
