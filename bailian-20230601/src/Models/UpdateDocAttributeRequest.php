<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20230601\Models;

use AlibabaCloud\Tea\Model;

class UpdateDocAttributeRequest extends Model
{
    /**
     * @example 2818xxxx_p_efm
     *
     * @var string
     */
    public $agentKey;

    /**
     * @example false
     *
     * @var bool
     */
    public $delAllTags;

    /**
     * @example 8C8FxxxxC3EE
     *
     * @var string
     */
    public $docId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string[]
     */
    public $tagIds;
    protected $_name = [
        'agentKey'   => 'AgentKey',
        'delAllTags' => 'DelAllTags',
        'docId'      => 'DocId',
        'name'       => 'Name',
        'tagIds'     => 'TagIds',
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
        if (null !== $this->tagIds) {
            $res['TagIds'] = $this->tagIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateDocAttributeRequest
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
            if (!empty($map['TagIds'])) {
                $model->tagIds = $map['TagIds'];
            }
        }

        return $model;
    }
}
