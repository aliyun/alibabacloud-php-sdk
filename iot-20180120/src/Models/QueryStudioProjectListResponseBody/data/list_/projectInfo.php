<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryStudioProjectListResponseBody\data\list_;

use AlibabaCloud\Tea\Model;

class projectInfo extends Model
{
    /**
     * @example This is a test project.
     *
     * @var string
     */
    public $description;

    /**
     * @example 1611819839000
     *
     * @var int
     */
    public $gmtCreate;

    /**
     * @example 1611819860000
     *
     * @var int
     */
    public $gmtModified;

    /**
     * @example test1
     *
     * @var string
     */
    public $name;

    /**
     * @example a123********
     *
     * @var string
     */
    public $projectId;
    protected $_name = [
        'description' => 'Description',
        'gmtCreate'   => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'name'        => 'Name',
        'projectId'   => 'ProjectId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return projectInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        return $model;
    }
}
