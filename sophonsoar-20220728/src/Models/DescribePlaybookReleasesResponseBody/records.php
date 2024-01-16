<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribePlaybookReleasesResponseBody;

use AlibabaCloud\Tea\Model;

class records extends Model
{
    /**
     * @description The ID of the Alibaba Cloud account that is used to publish the version.
     *
     * @example 145xxxx985
     *
     * @var string
     */
    public $creator;

    /**
     * @description The description of the layer version.
     *
     * @example This is a new version
     *
     * @var string
     */
    public $description;

    /**
     * @description The time when the version was created. The value is a 13-digit timestamp.
     *
     * @example 1655277397000
     *
     * @var int
     */
    public $gmtCreate;

    /**
     * @description The time when the version was modified. The value is a 13-digit timestamp.
     *
     * @example 1691460804000
     *
     * @var int
     */
    public $gmtModified;

    /**
     * @description The record ID.
     *
     * @example 80xxx
     *
     * @var int
     */
    public $id;

    /**
     * @description The MD5 value configured for the published version of the playbook.
     *
     * @example be0a4ef084dd174abe47xxxxx
     *
     * @var string
     */
    public $taskflowMd5;
    protected $_name = [
        'creator'     => 'Creator',
        'description' => 'Description',
        'gmtCreate'   => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'id'          => 'Id',
        'taskflowMd5' => 'TaskflowMd5',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->creator) {
            $res['Creator'] = $this->creator;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
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
        if (null !== $this->taskflowMd5) {
            $res['TaskflowMd5'] = $this->taskflowMd5;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return records
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Creator'])) {
            $model->creator = $map['Creator'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
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
        if (isset($map['TaskflowMd5'])) {
            $model->taskflowMd5 = $map['TaskflowMd5'];
        }

        return $model;
    }
}
