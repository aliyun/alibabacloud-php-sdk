<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20230601\Models;

use AlibabaCloud\Tea\Model;

class UpdateDocAttributeShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $agentKey;

    /**
     * @var bool
     */
    public $delAllTags;

    /**
     * @var string
     */
    public $docId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $tagIdsShrink;
    protected $_name = [
        'agentKey'     => 'AgentKey',
        'delAllTags'   => 'DelAllTags',
        'docId'        => 'DocId',
        'name'         => 'Name',
        'tagIdsShrink' => 'TagIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->agentKey) {
            $res['AgentKey'] = $this->agentKey;
        }
        if (null !== $this->delAllTags) {
            $res['DelAllTags'] = $this->delAllTags;
        }
        if (null !== $this->docId) {
            $res['DocId'] = $this->docId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->tagIdsShrink) {
            $res['TagIds'] = $this->tagIdsShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateDocAttributeShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AgentKey'])) {
            $model->agentKey = $map['AgentKey'];
        }
        if (isset($map['DelAllTags'])) {
            $model->delAllTags = $map['DelAllTags'];
        }
        if (isset($map['DocId'])) {
            $model->docId = $map['DocId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['TagIds'])) {
            $model->tagIdsShrink = $map['TagIds'];
        }

        return $model;
    }
}
