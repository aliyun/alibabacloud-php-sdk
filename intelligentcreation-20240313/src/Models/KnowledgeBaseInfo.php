<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models;

use AlibabaCloud\Tea\Model;

class KnowledgeBaseInfo extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $industry;

    /**
     * @var string
     */
    public $knowledgeBaseType;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'description'       => 'description',
        'id'                => 'id',
        'industry'          => 'industry',
        'knowledgeBaseType' => 'knowledgeBaseType',
        'name'              => 'name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->industry) {
            $res['industry'] = $this->industry;
        }
        if (null !== $this->knowledgeBaseType) {
            $res['knowledgeBaseType'] = $this->knowledgeBaseType;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return KnowledgeBaseInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }
        if (isset($map['industry'])) {
            $model->industry = $map['industry'];
        }
        if (isset($map['knowledgeBaseType'])) {
            $model->knowledgeBaseType = $map['knowledgeBaseType'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        return $model;
    }
}
