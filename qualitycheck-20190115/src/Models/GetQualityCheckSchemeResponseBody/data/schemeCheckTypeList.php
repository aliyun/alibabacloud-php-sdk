<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetQualityCheckSchemeResponseBody\data;

use AlibabaCloud\Tea\Model;

class schemeCheckTypeList extends Model
{
    /**
     * @var string
     */
    public $checkName;

    /**
     * @var int
     */
    public $checkType;

    /**
     * @var int
     */
    public $enable;

    /**
     * @var int
     */
    public $schemeId;

    /**
     * @var int
     */
    public $score;

    /**
     * @var int
     */
    public $sourceScore;
    protected $_name = [
        'checkName'   => 'CheckName',
        'checkType'   => 'CheckType',
        'enable'      => 'Enable',
        'schemeId'    => 'SchemeId',
        'score'       => 'Score',
        'sourceScore' => 'SourceScore',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkName) {
            $res['CheckName'] = $this->checkName;
        }
        if (null !== $this->checkType) {
            $res['CheckType'] = $this->checkType;
        }
        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
        }
        if (null !== $this->schemeId) {
            $res['SchemeId'] = $this->schemeId;
        }
        if (null !== $this->score) {
            $res['Score'] = $this->score;
        }
        if (null !== $this->sourceScore) {
            $res['SourceScore'] = $this->sourceScore;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return schemeCheckTypeList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CheckName'])) {
            $model->checkName = $map['CheckName'];
        }
        if (isset($map['CheckType'])) {
            $model->checkType = $map['CheckType'];
        }
        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }
        if (isset($map['SchemeId'])) {
            $model->schemeId = $map['SchemeId'];
        }
        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }
        if (isset($map['SourceScore'])) {
            $model->sourceScore = $map['SourceScore'];
        }

        return $model;
    }
}
