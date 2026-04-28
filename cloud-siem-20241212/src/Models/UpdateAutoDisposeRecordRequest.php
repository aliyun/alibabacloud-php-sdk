<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20241212\Models;

use AlibabaCloud\Dara\Model;

class UpdateAutoDisposeRecordRequest extends Model
{
    /**
     * @var string
     */
    public $autoDecisionConclusion;

    /**
     * @var string
     */
    public $autoDecisionEntityList;

    /**
     * @var string
     */
    public $autoDecisionResult;

    /**
     * @var string
     */
    public $autoDisposeRecordId;

    /**
     * @var string
     */
    public $lang;
    protected $_name = [
        'autoDecisionConclusion' => 'AutoDecisionConclusion',
        'autoDecisionEntityList' => 'AutoDecisionEntityList',
        'autoDecisionResult' => 'AutoDecisionResult',
        'autoDisposeRecordId' => 'AutoDisposeRecordId',
        'lang' => 'Lang',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoDecisionConclusion) {
            $res['AutoDecisionConclusion'] = $this->autoDecisionConclusion;
        }

        if (null !== $this->autoDecisionEntityList) {
            $res['AutoDecisionEntityList'] = $this->autoDecisionEntityList;
        }

        if (null !== $this->autoDecisionResult) {
            $res['AutoDecisionResult'] = $this->autoDecisionResult;
        }

        if (null !== $this->autoDisposeRecordId) {
            $res['AutoDisposeRecordId'] = $this->autoDisposeRecordId;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
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
        if (isset($map['AutoDecisionConclusion'])) {
            $model->autoDecisionConclusion = $map['AutoDecisionConclusion'];
        }

        if (isset($map['AutoDecisionEntityList'])) {
            $model->autoDecisionEntityList = $map['AutoDecisionEntityList'];
        }

        if (isset($map['AutoDecisionResult'])) {
            $model->autoDecisionResult = $map['AutoDecisionResult'];
        }

        if (isset($map['AutoDisposeRecordId'])) {
            $model->autoDisposeRecordId = $map['AutoDisposeRecordId'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        return $model;
    }
}
