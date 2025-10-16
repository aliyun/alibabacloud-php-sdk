<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeAclCheckResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeAclCheckResponseBody\checkRecord\acls;

class checkRecord extends Model
{
    /**
     * @var int
     */
    public $aclTotalCount;

    /**
     * @var acls[]
     */
    public $acls;

    /**
     * @var string
     */
    public $checkName;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $lastCheckTime;

    /**
     * @var string
     */
    public $level;

    /**
     * @var string
     */
    public $recordAssessmentDetail;

    /**
     * @var string
     */
    public $taskId;
    protected $_name = [
        'aclTotalCount' => 'AclTotalCount',
        'acls' => 'Acls',
        'checkName' => 'CheckName',
        'description' => 'Description',
        'lastCheckTime' => 'LastCheckTime',
        'level' => 'Level',
        'recordAssessmentDetail' => 'RecordAssessmentDetail',
        'taskId' => 'TaskId',
    ];

    public function validate()
    {
        if (\is_array($this->acls)) {
            Model::validateArray($this->acls);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aclTotalCount) {
            $res['AclTotalCount'] = $this->aclTotalCount;
        }

        if (null !== $this->acls) {
            if (\is_array($this->acls)) {
                $res['Acls'] = [];
                $n1 = 0;
                foreach ($this->acls as $item1) {
                    $res['Acls'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->checkName) {
            $res['CheckName'] = $this->checkName;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->lastCheckTime) {
            $res['LastCheckTime'] = $this->lastCheckTime;
        }

        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }

        if (null !== $this->recordAssessmentDetail) {
            $res['RecordAssessmentDetail'] = $this->recordAssessmentDetail;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
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
        if (isset($map['AclTotalCount'])) {
            $model->aclTotalCount = $map['AclTotalCount'];
        }

        if (isset($map['Acls'])) {
            if (!empty($map['Acls'])) {
                $model->acls = [];
                $n1 = 0;
                foreach ($map['Acls'] as $item1) {
                    $model->acls[$n1] = acls::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['CheckName'])) {
            $model->checkName = $map['CheckName'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['LastCheckTime'])) {
            $model->lastCheckTime = $map['LastCheckTime'];
        }

        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }

        if (isset($map['RecordAssessmentDetail'])) {
            $model->recordAssessmentDetail = $map['RecordAssessmentDetail'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
