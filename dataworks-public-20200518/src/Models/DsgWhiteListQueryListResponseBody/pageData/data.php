<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DsgWhiteListQueryListResponseBody\pageData;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The expiration time of the data masking whitelist cannot be earlier than the time when the data masking whitelist takes effect. Unit: days.
     *
     * @example 2024-05-10 15:46:20
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The time when the whitelist was created.
     *
     * @example 2024-05-09 15:46:20
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @description The time when the whitelist was modified.
     *
     * @example 2024-05-09 15:46:20
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @description The ID of the data masking whitelist.
     *
     * @example 123
     *
     * @var int
     */
    public $id;

    /**
     * @description The ID of the data masking rule.
     *
     * @example 123
     *
     * @var int
     */
    public $ruleId;

    /**
     * @description The ID of the level-2 data masking scenario.
     *
     * @example 123
     *
     * @var int
     */
    public $sceneId;

    /**
     * @description The time when the data masking whitelist takes effect cannot be earlier than the current time. Unit: days.
     *
     * @example 2024-05-09 15:46:20
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The sensitive field type.
     *
     * @example phone
     *
     * @var string
     */
    public $type;

    /**
     * @description A collection of user group names.
     *
     * @var string[]
     */
    public $userGroups;
    protected $_name = [
        'endTime'     => 'EndTime',
        'gmtCreate'   => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'id'          => 'Id',
        'ruleId'      => 'RuleId',
        'sceneId'     => 'SceneId',
        'startTime'   => 'StartTime',
        'type'        => 'Type',
        'userGroups'  => 'UserGroups',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }
        if (null !== $this->sceneId) {
            $res['SceneId'] = $this->sceneId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->userGroups) {
            $res['UserGroups'] = $this->userGroups;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }
        if (isset($map['SceneId'])) {
            $model->sceneId = $map['SceneId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['UserGroups'])) {
            if (!empty($map['UserGroups'])) {
                $model->userGroups = $map['UserGroups'];
            }
        }

        return $model;
    }
}
