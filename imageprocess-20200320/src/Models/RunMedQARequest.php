<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageprocess\V20200320\Models;

use AlibabaCloud\Tea\Model;

class RunMedQARequest extends Model
{
    /**
     * @var string
     */
    public $question;

    /**
     * @var string
     */
    public $orgId;

    /**
     * @var string
     */
    public $orgName;
    protected $_name = [
        'question' => 'Question',
        'orgId'    => 'OrgId',
        'orgName'  => 'OrgName',
    ];

    public function validate()
    {
        Model::validateRequired('question', $this->question, true);
        Model::validateRequired('orgId', $this->orgId, true);
        Model::validateRequired('orgName', $this->orgName, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->question) {
            $res['Question'] = $this->question;
        }
        if (null !== $this->orgId) {
            $res['OrgId'] = $this->orgId;
        }
        if (null !== $this->orgName) {
            $res['OrgName'] = $this->orgName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RunMedQARequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Question'])) {
            $model->question = $map['Question'];
        }
        if (isset($map['OrgId'])) {
            $model->orgId = $map['OrgId'];
        }
        if (isset($map['OrgName'])) {
            $model->orgName = $map['OrgName'];
        }

        return $model;
    }
}
