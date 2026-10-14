<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Dara\Model;

class GetKnowledgeRecallRequest extends Model
{
    /**
     * @var string
     */
    public $DBClusterId;

    /**
     * @var string
     */
    public $images;

    /**
     * @var string
     */
    public $path;

    /**
     * @var string
     */
    public $question;

    /**
     * @var string
     */
    public $semanticRules;

    /**
     * @var string
     */
    public $tags;

    /**
     * @var int
     */
    public $topk;

    /**
     * @var string
     */
    public $user;
    protected $_name = [
        'DBClusterId' => 'DBClusterId',
        'images' => 'Images',
        'path' => 'Path',
        'question' => 'Question',
        'semanticRules' => 'SemanticRules',
        'tags' => 'Tags',
        'topk' => 'Topk',
        'user' => 'User',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }

        if (null !== $this->images) {
            $res['Images'] = $this->images;
        }

        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }

        if (null !== $this->question) {
            $res['Question'] = $this->question;
        }

        if (null !== $this->semanticRules) {
            $res['SemanticRules'] = $this->semanticRules;
        }

        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }

        if (null !== $this->topk) {
            $res['Topk'] = $this->topk;
        }

        if (null !== $this->user) {
            $res['User'] = $this->user;
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
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }

        if (isset($map['Images'])) {
            $model->images = $map['Images'];
        }

        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }

        if (isset($map['Question'])) {
            $model->question = $map['Question'];
        }

        if (isset($map['SemanticRules'])) {
            $model->semanticRules = $map['SemanticRules'];
        }

        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
        }

        if (isset($map['Topk'])) {
            $model->topk = $map['Topk'];
        }

        if (isset($map['User'])) {
            $model->user = $map['User'];
        }

        return $model;
    }
}
