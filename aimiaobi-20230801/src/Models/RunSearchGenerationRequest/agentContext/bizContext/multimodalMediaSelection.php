<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchGenerationRequest\agentContext\bizContext;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchGenerationRequest\agentContext\bizContext\multimodalMediaSelection\textSearchResult;

class multimodalMediaSelection extends Model
{
    /**
     * @var string
     */
    public $originalSessionId;
    /**
     * @var string
     */
    public $searchModel;
    /**
     * @var string
     */
    public $searchModelDataValue;
    /**
     * @var string
     */
    public $selectionType;
    /**
     * @var string
     */
    public $sessionId;
    /**
     * @var textSearchResult
     */
    public $textSearchResult;
    protected $_name = [
        'originalSessionId'    => 'OriginalSessionId',
        'searchModel'          => 'SearchModel',
        'searchModelDataValue' => 'SearchModelDataValue',
        'selectionType'        => 'SelectionType',
        'sessionId'            => 'SessionId',
        'textSearchResult'     => 'TextSearchResult',
    ];

    public function validate()
    {
        if (null !== $this->textSearchResult) {
            $this->textSearchResult->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->originalSessionId) {
            $res['OriginalSessionId'] = $this->originalSessionId;
        }

        if (null !== $this->searchModel) {
            $res['SearchModel'] = $this->searchModel;
        }

        if (null !== $this->searchModelDataValue) {
            $res['SearchModelDataValue'] = $this->searchModelDataValue;
        }

        if (null !== $this->selectionType) {
            $res['SelectionType'] = $this->selectionType;
        }

        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
        }

        if (null !== $this->textSearchResult) {
            $res['TextSearchResult'] = null !== $this->textSearchResult ? $this->textSearchResult->toArray($noStream) : $this->textSearchResult;
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
        if (isset($map['OriginalSessionId'])) {
            $model->originalSessionId = $map['OriginalSessionId'];
        }

        if (isset($map['SearchModel'])) {
            $model->searchModel = $map['SearchModel'];
        }

        if (isset($map['SearchModelDataValue'])) {
            $model->searchModelDataValue = $map['SearchModelDataValue'];
        }

        if (isset($map['SelectionType'])) {
            $model->selectionType = $map['SelectionType'];
        }

        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }

        if (isset($map['TextSearchResult'])) {
            $model->textSearchResult = textSearchResult::fromMap($map['TextSearchResult']);
        }

        return $model;
    }
}
