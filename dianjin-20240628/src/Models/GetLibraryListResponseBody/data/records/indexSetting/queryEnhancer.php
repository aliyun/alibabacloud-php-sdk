<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DianJin\V20240628\Models\GetLibraryListResponseBody\data\records\indexSetting;

use AlibabaCloud\Dara\Model;

class queryEnhancer extends Model
{
    /**
     * @var bool
     */
    public $enableFollowUp;
    /**
     * @var bool
     */
    public $enableMultiQuery;
    /**
     * @var bool
     */
    public $enableOpenQa;
    /**
     * @var bool
     */
    public $enableQueryRewrite;
    /**
     * @var bool
     */
    public $enableSession;
    /**
     * @var string
     */
    public $localKnowledgeId;
    /**
     * @var bool
     */
    public $withDocumentReference;
    protected $_name = [
        'enableFollowUp'        => 'enableFollowUp',
        'enableMultiQuery'      => 'enableMultiQuery',
        'enableOpenQa'          => 'enableOpenQa',
        'enableQueryRewrite'    => 'enableQueryRewrite',
        'enableSession'         => 'enableSession',
        'localKnowledgeId'      => 'localKnowledgeId',
        'withDocumentReference' => 'withDocumentReference',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enableFollowUp) {
            $res['enableFollowUp'] = $this->enableFollowUp;
        }

        if (null !== $this->enableMultiQuery) {
            $res['enableMultiQuery'] = $this->enableMultiQuery;
        }

        if (null !== $this->enableOpenQa) {
            $res['enableOpenQa'] = $this->enableOpenQa;
        }

        if (null !== $this->enableQueryRewrite) {
            $res['enableQueryRewrite'] = $this->enableQueryRewrite;
        }

        if (null !== $this->enableSession) {
            $res['enableSession'] = $this->enableSession;
        }

        if (null !== $this->localKnowledgeId) {
            $res['localKnowledgeId'] = $this->localKnowledgeId;
        }

        if (null !== $this->withDocumentReference) {
            $res['withDocumentReference'] = $this->withDocumentReference;
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
        if (isset($map['enableFollowUp'])) {
            $model->enableFollowUp = $map['enableFollowUp'];
        }

        if (isset($map['enableMultiQuery'])) {
            $model->enableMultiQuery = $map['enableMultiQuery'];
        }

        if (isset($map['enableOpenQa'])) {
            $model->enableOpenQa = $map['enableOpenQa'];
        }

        if (isset($map['enableQueryRewrite'])) {
            $model->enableQueryRewrite = $map['enableQueryRewrite'];
        }

        if (isset($map['enableSession'])) {
            $model->enableSession = $map['enableSession'];
        }

        if (isset($map['localKnowledgeId'])) {
            $model->localKnowledgeId = $map['localKnowledgeId'];
        }

        if (isset($map['withDocumentReference'])) {
            $model->withDocumentReference = $map['withDocumentReference'];
        }

        return $model;
    }
}
