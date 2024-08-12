<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DianJin\V20240628\Models\UpdateLibraryRequest\indexSetting;

use AlibabaCloud\Tea\Model;

class queryEnhancer extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $enableFollowUp;

    /**
     * @example true
     *
     * @var bool
     */
    public $enableMultiQuery;

    /**
     * @example true
     *
     * @var bool
     */
    public $enableOpenQa;

    /**
     * @example true
     *
     * @var bool
     */
    public $enableQueryRewrite;

    /**
     * @example true
     *
     * @var bool
     */
    public $enableSession;

    /**
     * @example sjdhgfc
     *
     * @var string
     */
    public $localKnowledgeId;

    /**
     * @example true
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return queryEnhancer
     */
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
