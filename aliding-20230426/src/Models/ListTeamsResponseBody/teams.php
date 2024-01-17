<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\ListTeamsResponseBody;

use AlibabaCloud\SDK\Aliding\V20230426\Models\ListTeamsResponseBody\teams\icon;
use AlibabaCloud\Tea\Model;

class teams extends Model
{
    /**
     * @example ding16b241fd05********288
     *
     * @var string
     */
    public $corpId;

    /**
     * @example https://example/file-manage-files/zh-CN/202***13/ldet/XXXX.jpg
     *
     * @var string
     */
    public $cover;

    /**
     * @example 01472825524039877041
     *
     * @var string
     */
    public $createTime;

    /**
     * @example 012345
     *
     * @var string
     */
    public $creatorId;

    /**
     * @example team_description
     *
     * @var string
     */
    public $description;

    /**
     * @var icon
     */
    public $icon;

    /**
     * @example 2023-05-15T11:29Z
     *
     * @var string
     */
    public $modifiedTime;

    /**
     * @example 012345
     *
     * @var string
     */
    public $modifierId;

    /**
     * @example team_name
     *
     * @var string
     */
    public $name;

    /**
     * @example lHiicjNFM2iSFYSdz2iPuI8ZwiEiE
     *
     * @var string
     */
    public $teamId;
    protected $_name = [
        'corpId'       => 'CorpId',
        'cover'        => 'Cover',
        'createTime'   => 'CreateTime',
        'creatorId'    => 'CreatorId',
        'description'  => 'Description',
        'icon'         => 'Icon',
        'modifiedTime' => 'ModifiedTime',
        'modifierId'   => 'ModifierId',
        'name'         => 'Name',
        'teamId'       => 'TeamId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->corpId) {
            $res['CorpId'] = $this->corpId;
        }
        if (null !== $this->cover) {
            $res['Cover'] = $this->cover;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->creatorId) {
            $res['CreatorId'] = $this->creatorId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->icon) {
            $res['Icon'] = null !== $this->icon ? $this->icon->toMap() : null;
        }
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }
        if (null !== $this->modifierId) {
            $res['ModifierId'] = $this->modifierId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->teamId) {
            $res['TeamId'] = $this->teamId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return teams
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CorpId'])) {
            $model->corpId = $map['CorpId'];
        }
        if (isset($map['Cover'])) {
            $model->cover = $map['Cover'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['CreatorId'])) {
            $model->creatorId = $map['CreatorId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Icon'])) {
            $model->icon = icon::fromMap($map['Icon']);
        }
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }
        if (isset($map['ModifierId'])) {
            $model->modifierId = $map['ModifierId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['TeamId'])) {
            $model->teamId = $map['TeamId'];
        }

        return $model;
    }
}
