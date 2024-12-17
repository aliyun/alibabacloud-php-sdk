<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchGenerationResponseBody\payload\output\agentContext\bizContext\generatedContent\textGenerateResult\multimodalSearchResultList\searchResult;

use AlibabaCloud\Tea\Model;

class clipInfos extends Model
{
    /**
     * @example 1
     *
     * @var float
     */
    public $from;

    /**
     * @example 0.1
     *
     * @var float
     */
    public $score;

    /**
     * @example xx
     *
     * @var string
     */
    public $text;

    /**
     * @example 1
     *
     * @var float
     */
    public $to;

    /**
     * @example asr
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'from'  => 'From',
        'score' => 'Score',
        'text'  => 'Text',
        'to'    => 'To',
        'type'  => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->from) {
            $res['From'] = $this->from;
        }
        if (null !== $this->score) {
            $res['Score'] = $this->score;
        }
        if (null !== $this->text) {
            $res['Text'] = $this->text;
        }
        if (null !== $this->to) {
            $res['To'] = $this->to;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return clipInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['From'])) {
            $model->from = $map['From'];
        }
        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }
        if (isset($map['Text'])) {
            $model->text = $map['Text'];
        }
        if (isset($map['To'])) {
            $model->to = $map['To'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
