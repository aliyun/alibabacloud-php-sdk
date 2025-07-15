<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Tea\Model;

class AddAuditTermsRequest extends Model
{
    /**
     * @example 龘
     *
     * @var string
     */
    public $keyword;

    /**
     * @example 龘(dá)
     *
     * @var string
     */
    public $suggestWord;

    /**
     * @example 龙行龘龘出自四库本《玉篇》23龙部第8字，文字释义为群龙腾飞的样子，昂扬而热烈。
     *
     * @var string
     */
    public $termsDesc;

    /**
     * @description This parameter is required.
     *
     * @example llm-xx
     *
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'keyword' => 'Keyword',
        'suggestWord' => 'SuggestWord',
        'termsDesc' => 'TermsDesc',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
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

    /**
     * @param array $map
     *
     * @return AddAuditTermsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
