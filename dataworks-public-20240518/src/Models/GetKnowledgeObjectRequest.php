<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;

class GetKnowledgeObjectRequest extends Model
{
    /**
     * @var string
     */
    public $knowledgeBaseId;

    /**
     * @var string
     */
    public $knowledgeObjectId;

    /**
     * @var int
     */
    public $versionNo;
    protected $_name = [
        'knowledgeBaseId' => 'KnowledgeBaseId',
        'knowledgeObjectId' => 'KnowledgeObjectId',
        'versionNo' => 'VersionNo',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->knowledgeBaseId) {
            $res['KnowledgeBaseId'] = $this->knowledgeBaseId;
        }

        if (null !== $this->knowledgeObjectId) {
            $res['KnowledgeObjectId'] = $this->knowledgeObjectId;
        }

        if (null !== $this->versionNo) {
            $res['VersionNo'] = $this->versionNo;
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
        if (isset($map['KnowledgeBaseId'])) {
            $model->knowledgeBaseId = $map['KnowledgeBaseId'];
        }

        if (isset($map['KnowledgeObjectId'])) {
            $model->knowledgeObjectId = $map['KnowledgeObjectId'];
        }

        if (isset($map['VersionNo'])) {
            $model->versionNo = $map['VersionNo'];
        }

        return $model;
    }
}
