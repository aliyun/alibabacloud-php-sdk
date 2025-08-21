<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20220408\Models\ListDSEntityValueResponseBody;

use AlibabaCloud\Dara\Model;

class entityValues extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var int
     */
    public $entityId;

    /**
     * @var int
     */
    public $entityValueId;

    /**
     * @var string
     */
    public $modifyTime;

    /**
     * @var string[]
     */
    public $synonyms;
    protected $_name = [
        'content' => 'Content',
        'createTime' => 'CreateTime',
        'entityId' => 'EntityId',
        'entityValueId' => 'EntityValueId',
        'modifyTime' => 'ModifyTime',
        'synonyms' => 'Synonyms',
    ];

    public function validate()
    {
        if (\is_array($this->synonyms)) {
            Model::validateArray($this->synonyms);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->entityId) {
            $res['EntityId'] = $this->entityId;
        }

        if (null !== $this->entityValueId) {
            $res['EntityValueId'] = $this->entityValueId;
        }

        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }

        if (null !== $this->synonyms) {
            if (\is_array($this->synonyms)) {
                $res['Synonyms'] = [];
                $n1 = 0;
                foreach ($this->synonyms as $item1) {
                    $res['Synonyms'][$n1] = $item1;
                    ++$n1;
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
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['EntityId'])) {
            $model->entityId = $map['EntityId'];
        }

        if (isset($map['EntityValueId'])) {
            $model->entityValueId = $map['EntityValueId'];
        }

        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }

        if (isset($map['Synonyms'])) {
            if (!empty($map['Synonyms'])) {
                $model->synonyms = [];
                $n1 = 0;
                foreach ($map['Synonyms'] as $item1) {
                    $model->synonyms[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
