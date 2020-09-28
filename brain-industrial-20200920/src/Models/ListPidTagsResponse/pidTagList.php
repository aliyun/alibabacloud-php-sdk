<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Brainindustrial\V20200920\Models\ListPidTagsResponse;

use AlibabaCloud\Tea\Model;

class pidTagList extends Model
{
    /**
     * @var string
     */
    public $pidTagId;

    /**
     * @var string
     */
    public $pidProjectId;

    /**
     * @var string
     */
    public $pidTagName;

    /**
     * @var string
     */
    public $pidTagType;

    /**
     * @var int
     */
    public $uploadProjectId;
    protected $_name = [
        'pidTagId'        => 'PidTagId',
        'pidProjectId'    => 'PidProjectId',
        'pidTagName'      => 'PidTagName',
        'pidTagType'      => 'PidTagType',
        'uploadProjectId' => 'UploadProjectId',
    ];

    public function validate()
    {
        Model::validateRequired('pidTagId', $this->pidTagId, true);
        Model::validateRequired('pidProjectId', $this->pidProjectId, true);
        Model::validateRequired('pidTagName', $this->pidTagName, true);
        Model::validateRequired('pidTagType', $this->pidTagType, true);
        Model::validateRequired('uploadProjectId', $this->uploadProjectId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pidTagId) {
            $res['PidTagId'] = $this->pidTagId;
        }
        if (null !== $this->pidProjectId) {
            $res['PidProjectId'] = $this->pidProjectId;
        }
        if (null !== $this->pidTagName) {
            $res['PidTagName'] = $this->pidTagName;
        }
        if (null !== $this->pidTagType) {
            $res['PidTagType'] = $this->pidTagType;
        }
        if (null !== $this->uploadProjectId) {
            $res['UploadProjectId'] = $this->uploadProjectId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return pidTagList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PidTagId'])) {
            $model->pidTagId = $map['PidTagId'];
        }
        if (isset($map['PidProjectId'])) {
            $model->pidProjectId = $map['PidProjectId'];
        }
        if (isset($map['PidTagName'])) {
            $model->pidTagName = $map['PidTagName'];
        }
        if (isset($map['PidTagType'])) {
            $model->pidTagType = $map['PidTagType'];
        }
        if (isset($map['UploadProjectId'])) {
            $model->uploadProjectId = $map['UploadProjectId'];
        }

        return $model;
    }
}
