<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetTableDesignProjectInfoResponseBody;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetTableDesignProjectInfoResponseBody\projectInfo\baseDatabase;
use AlibabaCloud\Tea\Model;

class projectInfo extends Model
{
    /**
     * @var baseDatabase
     */
    public $baseDatabase;

    /**
     * @example 71****
     *
     * @var int
     */
    public $creatorId;

    /**
     * @var string
     */
    public $description;

    /**
     * @example 2024-04-23 02:57:01
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @example 2024-04-23 02:57:01
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @example 95****
     *
     * @var int
     */
    public $orderId;

    /**
     * @example 12****
     *
     * @var int
     */
    public $projectId;

    /**
     * @example DESIGN
     *
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'baseDatabase' => 'BaseDatabase',
        'creatorId'    => 'CreatorId',
        'description'  => 'Description',
        'gmtCreate'    => 'GmtCreate',
        'gmtModified'  => 'GmtModified',
        'orderId'      => 'OrderId',
        'projectId'    => 'ProjectId',
        'status'       => 'Status',
        'title'        => 'Title',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->baseDatabase) {
            $res['BaseDatabase'] = null !== $this->baseDatabase ? $this->baseDatabase->toMap() : null;
        }
        if (null !== $this->creatorId) {
            $res['CreatorId'] = $this->creatorId;
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
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
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
        if (isset($map['BaseDatabase'])) {
            $model->baseDatabase = baseDatabase::fromMap($map['BaseDatabase']);
        }
        if (isset($map['CreatorId'])) {
            $model->creatorId = $map['CreatorId'];
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
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
