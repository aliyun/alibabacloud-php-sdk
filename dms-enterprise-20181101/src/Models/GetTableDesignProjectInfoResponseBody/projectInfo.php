<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetTableDesignProjectInfoResponseBody;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetTableDesignProjectInfoResponseBody\projectInfo\baseDatabase;
use AlibabaCloud\Tea\Model;

class projectInfo extends Model
{
    /**
     * @description The information about the change base database of the schema design ticket.
     *
     * @var baseDatabase
     */
    public $baseDatabase;

    /**
     * @description The ID of the user who created the ticket.
     *
     * @example 71****
     *
     * @var int
     */
    public $creatorId;

    /**
     * @description The description of the schema design project.
     *
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @description The time when the ticket was created.
     *
     * @example 2024-04-23 02:57:01
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @description The time when the ticket was last modified.
     *
     * @example 2024-04-23 02:57:01
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @description The ticket ID.
     *
     * @example 95****
     *
     * @var int
     */
    public $orderId;

    /**
     * @description The project ID.
     *
     * @example 12****
     *
     * @var int
     */
    public $projectId;

    /**
     * @description The state of the schema design project. Valid values:
     *
     *   **DESIGN**: The schema is being designed.
     *   **PUBLISHED**: The schema is published.
     *   **CLOSE**: The ticket is closed.
     *
     * @example DESIGN
     *
     * @var string
     */
    public $status;

    /**
     * @description The name of the schema design project.
     *
     * @example test
     *
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
