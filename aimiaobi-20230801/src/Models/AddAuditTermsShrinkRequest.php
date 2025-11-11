<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Dara\Model;

class AddAuditTermsShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $exceptionWordShrink;

    /**
     * @var string
     */
    public $keyword;

    /**
     * @var string
     */
    public $suggestWord;

    /**
     * @var string
     */
    public $termsDesc;

    /**
     * @var string
     */
    public $termsName;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'exceptionWordShrink' => 'ExceptionWord',
        'keyword' => 'Keyword',
        'suggestWord' => 'SuggestWord',
        'termsDesc' => 'TermsDesc',
        'termsName' => 'TermsName',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->exceptionWordShrink) {
            $res['ExceptionWord'] = $this->exceptionWordShrink;
        }

        if (null !== $this->keyword) {
            $res['Keyword'] = $this->keyword;
        }

        if (null !== $this->suggestWord) {
            $res['SuggestWord'] = $this->suggestWord;
        }

        if (null !== $this->termsDesc) {
            $res['TermsDesc'] = $this->termsDesc;
        }

        if (null !== $this->termsName) {
            $res['TermsName'] = $this->termsName;
        }

        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
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
        if (isset($map['ExceptionWord'])) {
            $model->exceptionWordShrink = $map['ExceptionWord'];
        }

        if (isset($map['Keyword'])) {
            $model->keyword = $map['Keyword'];
        }

        if (isset($map['SuggestWord'])) {
            $model->suggestWord = $map['SuggestWord'];
        }

        if (isset($map['TermsDesc'])) {
            $model->termsDesc = $map['TermsDesc'];
        }

        if (isset($map['TermsName'])) {
            $model->termsName = $map['TermsName'];
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
