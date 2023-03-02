<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ltl\V20190510\Models\DescribeMPCoSPhaseInfoResponseBody\data;

use AlibabaCloud\Tea\Model;

class relatedDataList extends Model
{
    /**
     * @example 256399502929****
     *
     * @var string
     */
    public $relatedDataKey;

    /**
     * @example be350cd52b0f47846f93df7d0d4febd86025ee6c028a6b22a6ff1ac6d3a2****
     *
     * @var string
     */
    public $relatedDataSeq;

    /**
     * @example 73b5c3dbc828fdf79749ff332af402036f7d591959fda00a2854a160fe66****
     *
     * @var string
     */
    public $relatedPhaseDataHash;

    /**
     * @example 987823074334****
     *
     * @var string
     */
    public $relatedPhaseId;

    /**
     * @var string
     */
    public $relatedPhaseName;
    protected $_name = [
        'relatedDataKey'       => 'RelatedDataKey',
        'relatedDataSeq'       => 'RelatedDataSeq',
        'relatedPhaseDataHash' => 'RelatedPhaseDataHash',
        'relatedPhaseId'       => 'RelatedPhaseId',
        'relatedPhaseName'     => 'RelatedPhaseName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->relatedDataKey) {
            $res['RelatedDataKey'] = $this->relatedDataKey;
        }
        if (null !== $this->relatedDataSeq) {
            $res['RelatedDataSeq'] = $this->relatedDataSeq;
        }
        if (null !== $this->relatedPhaseDataHash) {
            $res['RelatedPhaseDataHash'] = $this->relatedPhaseDataHash;
        }
        if (null !== $this->relatedPhaseId) {
            $res['RelatedPhaseId'] = $this->relatedPhaseId;
        }
        if (null !== $this->relatedPhaseName) {
            $res['RelatedPhaseName'] = $this->relatedPhaseName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return relatedDataList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RelatedDataKey'])) {
            $model->relatedDataKey = $map['RelatedDataKey'];
        }
        if (isset($map['RelatedDataSeq'])) {
            $model->relatedDataSeq = $map['RelatedDataSeq'];
        }
        if (isset($map['RelatedPhaseDataHash'])) {
            $model->relatedPhaseDataHash = $map['RelatedPhaseDataHash'];
        }
        if (isset($map['RelatedPhaseId'])) {
            $model->relatedPhaseId = $map['RelatedPhaseId'];
        }
        if (isset($map['RelatedPhaseName'])) {
            $model->relatedPhaseName = $map['RelatedPhaseName'];
        }

        return $model;
    }
}
