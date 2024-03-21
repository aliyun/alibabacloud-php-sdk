<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20190902\Models;

use AlibabaCloud\Tea\Model;

class CheckDuplicateApplicantRiskRequest extends Model
{
    /**
     * @var string
     */
    public $applicantName;

    /**
     * @var int
     */
    public $eventSceneType;
    protected $_name = [
        'applicantName'  => 'ApplicantName',
        'eventSceneType' => 'EventSceneType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applicantName) {
            $res['ApplicantName'] = $this->applicantName;
        }
        if (null !== $this->eventSceneType) {
            $res['EventSceneType'] = $this->eventSceneType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CheckDuplicateApplicantRiskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApplicantName'])) {
            $model->applicantName = $map['ApplicantName'];
        }
        if (isset($map['EventSceneType'])) {
            $model->eventSceneType = $map['EventSceneType'];
        }

        return $model;
    }
}
