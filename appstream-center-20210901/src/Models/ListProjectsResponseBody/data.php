<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListProjectsResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int[]
     */
    public $accessPageId;

    /**
     * @example 3174301
     *
     * @var int
     */
    public $availableHours;

    /**
     * @example c-06vcpamarryyq****
     *
     * @var string
     */
    public $contentId;

    /**
     * @example notepad++***
     *
     * @var string
     */
    public $contentName;

    /**
     * @example 1701141509000
     *
     * @var string
     */
    public $createTime;

    /**
     * @example xxx
     *
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $inUseSessions;

    /**
     * @example 1000
     *
     * @var int
     */
    public $maxHours;

    /**
     * @example 100
     *
     * @var int
     */
    public $maxSessions;

    /**
     * @example p-065z4tu9ak07h****
     *
     * @var string
     */
    public $projectId;

    /**
     * @example notepad++***
     *
     * @var string
     */
    public $projectName;

    /**
     * @example 0
     *
     * @var string
     */
    public $projectState;

    /**
     * @example appstreaming.general.basic
     *
     * @var string
     */
    public $sessionSpec;
    protected $_name = [
        'accessPageId'   => 'AccessPageId',
        'availableHours' => 'AvailableHours',
        'contentId'      => 'ContentId',
        'contentName'    => 'ContentName',
        'createTime'     => 'CreateTime',
        'description'    => 'Description',
        'inUseSessions'  => 'InUseSessions',
        'maxHours'       => 'MaxHours',
        'maxSessions'    => 'MaxSessions',
        'projectId'      => 'ProjectId',
        'projectName'    => 'ProjectName',
        'projectState'   => 'ProjectState',
        'sessionSpec'    => 'SessionSpec',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessPageId) {
            $res['AccessPageId'] = $this->accessPageId;
        }
        if (null !== $this->availableHours) {
            $res['AvailableHours'] = $this->availableHours;
        }
        if (null !== $this->contentId) {
            $res['ContentId'] = $this->contentId;
        }
        if (null !== $this->contentName) {
            $res['ContentName'] = $this->contentName;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->inUseSessions) {
            $res['InUseSessions'] = $this->inUseSessions;
        }
        if (null !== $this->maxHours) {
            $res['MaxHours'] = $this->maxHours;
        }
        if (null !== $this->maxSessions) {
            $res['MaxSessions'] = $this->maxSessions;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->projectState) {
            $res['ProjectState'] = $this->projectState;
        }
        if (null !== $this->sessionSpec) {
            $res['SessionSpec'] = $this->sessionSpec;
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
        if (isset($map['AccessPageId'])) {
            if (!empty($map['AccessPageId'])) {
                $model->accessPageId = $map['AccessPageId'];
            }
        }
        if (isset($map['AvailableHours'])) {
            $model->availableHours = $map['AvailableHours'];
        }
        if (isset($map['ContentId'])) {
            $model->contentId = $map['ContentId'];
        }
        if (isset($map['ContentName'])) {
            $model->contentName = $map['ContentName'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['InUseSessions'])) {
            $model->inUseSessions = $map['InUseSessions'];
        }
        if (isset($map['MaxHours'])) {
            $model->maxHours = $map['MaxHours'];
        }
        if (isset($map['MaxSessions'])) {
            $model->maxSessions = $map['MaxSessions'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['ProjectState'])) {
            $model->projectState = $map['ProjectState'];
        }
        if (isset($map['SessionSpec'])) {
            $model->sessionSpec = $map['SessionSpec'];
        }

        return $model;
    }
}
