<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tingwu\V20230930\Models\CreateTaskRequest\parameters;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Tingwu\V20230930\Models\CreateTaskRequest\parameters\identityRecognition\identityContents;

class identityRecognition extends Model
{
    /**
     * @var identityContents[]
     */
    public $identityContents;

    /**
     * @var string
     */
    public $sceneIntroduction;
    protected $_name = [
        'identityContents' => 'IdentityContents',
        'sceneIntroduction' => 'SceneIntroduction',
    ];

    public function validate()
    {
        if (\is_array($this->identityContents)) {
            Model::validateArray($this->identityContents);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->identityContents) {
            if (\is_array($this->identityContents)) {
                $res['IdentityContents'] = [];
                $n1 = 0;
                foreach ($this->identityContents as $item1) {
                    $res['IdentityContents'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['IdentityContents'])) {
            if (!empty($map['IdentityContents'])) {
                $model->identityContents = [];
                $n1 = 0;
                foreach ($map['IdentityContents'] as $item1) {
                    $model->identityContents[$n1++] = identityContents::fromMap($item1);
                }
            }
        }

        if (isset($map['SceneIntroduction'])) {
            $model->sceneIntroduction = $map['SceneIntroduction'];
        }

        return $model;
    }
}
