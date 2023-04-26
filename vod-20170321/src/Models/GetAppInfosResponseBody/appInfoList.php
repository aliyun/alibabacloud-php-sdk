<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetAppInfosResponseBody;

use AlibabaCloud\Tea\Model;

class appInfoList extends Model
{
    /**
     * @example app-****
     *
     * @var string
     */
    public $appId;

    /**
     * @example test
     *
     * @var string
     */
    public $appName;

    /**
     * @example 2019-03-01T08:00:00Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @example my first app.
     *
     * @var string
     */
    public $description;

    /**
     * @example 2019-03-01T09:00:00Z
     *
     * @var string
     */
    public $modificationTime;

    /**
     * @description Queries the information about one or more applications based on application IDs.
     *
     * @example Normal
     *
     * @var string
     */
    public $status;

    /**
     * @description The ID of the request.
     *
     * @example System
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'appId'            => 'AppId',
        'appName'          => 'AppName',
        'creationTime'     => 'CreationTime',
        'description'      => 'Description',
        'modificationTime' => 'ModificationTime',
        'status'           => 'Status',
        'type'             => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->modificationTime) {
            $res['ModificationTime'] = $this->modificationTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return appInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ModificationTime'])) {
            $model->modificationTime = $map['ModificationTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
