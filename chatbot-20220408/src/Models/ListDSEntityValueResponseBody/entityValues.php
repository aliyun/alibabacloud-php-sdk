<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20220408\Models\ListDSEntityValueResponseBody;

use AlibabaCloud\Tea\Model;

class entityValues extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @example 2021-08-12T16:00:01Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @example 34313785463
     *
     * @var int
     */
    public $entityId;

    /**
     * @example 3467858234534534532
     *
     * @var int
     */
    public $entityValueId;

    /**
     * @example 2021-08-12T16:00:01Z
     *
     * @var string
     */
    public $modifyTime;

    /**
     * @var string[]
     */
    public $synonyms;
    protected $_name = [
        'content'       => 'Content',
        'createTime'    => 'CreateTime',
        'entityId'      => 'EntityId',
        'entityValueId' => 'EntityValueId',
        'modifyTime'    => 'ModifyTime',
        'synonyms'      => 'Synonyms',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['Synonyms'] = $this->synonyms;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return entityValues
     */
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
                $model->synonyms = $map['Synonyms'];
            }
        }

        return $model;
    }
}
