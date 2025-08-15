<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Dara\Model;

class AddAuditTermsRequest extends Model
{
    /**
     * @var string[]
     */
    public $exceptionWord;

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
    public $workspaceId;
    protected $_name = [
        'exceptionWord' => 'ExceptionWord',
        'keyword' => 'Keyword',
        'suggestWord' => 'SuggestWord',
        'termsDesc' => 'TermsDesc',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        if (\is_array($this->exceptionWord)) {
            Model::validateArray($this->exceptionWord);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->exceptionWord) {
            if (\is_array($this->exceptionWord)) {
                $res['ExceptionWord'] = [];
                $n1 = 0;
                foreach ($this->exceptionWord as $item1) {
                    $res['ExceptionWord'][$n1] = $item1;
                    ++$n1;
                }
            }
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
            if (!empty($map['ExceptionWord'])) {
                $model->exceptionWord = [];
                $n1 = 0;
                foreach ($map['ExceptionWord'] as $item1) {
                    $model->exceptionWord[$n1] = $item1;
                    ++$n1;
                }
            }
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

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
