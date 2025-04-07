<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListPersistentAppInstancesResponseBody;

use AlibabaCloud\Tea\Model;

class persistentAppInstanceModels extends Model
{
    /**
     * @example aig-0bxls9m9arax6****
     *
     * @var string
     */
    public $appInstanceGroupId;

    /**
     * @example ai-azn3kmwruh1vl****
     *
     * @var string
     */
    public $appInstanceId;

    /**
     * @example p-0cc7s3mw2fg4j****
     *
     * @var string
     */
    public $appInstancePersistentId;

    /**
     * @example test-persistent-name
     *
     * @var string
     */
    public $appInstancePersistentName;

    /**
     * @example RUNNING
     *
     * @var string
     */
    public $appInstancePersistentStatus;

    /**
     * @example RUNNING
     *
     * @var string
     */
    public $appInstanceStatus;

    /**
     * @var string[]
     */
    public $authorizedUsers;

    /**
     * @example 2025-03-13T03:22:18.000+00:00
     *
     * @var string
     */
    public $gmtCreate;
    protected $_name = [
        'appInstanceGroupId' => 'AppInstanceGroupId',
        'appInstanceId' => 'AppInstanceId',
        'appInstancePersistentId' => 'AppInstancePersistentId',
        'appInstancePersistentName' => 'AppInstancePersistentName',
        'appInstancePersistentStatus' => 'AppInstancePersistentStatus',
        'appInstanceStatus' => 'AppInstanceStatus',
        'authorizedUsers' => 'AuthorizedUsers',
        'gmtCreate' => 'GmtCreate',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appInstanceGroupId) {
            $res['AppInstanceGroupId'] = $this->appInstanceGroupId;
        }
        if (null !== $this->appInstanceId) {
            $res['AppInstanceId'] = $this->appInstanceId;
        }
        if (null !== $this->appInstancePersistentId) {
            $res['AppInstancePersistentId'] = $this->appInstancePersistentId;
        }
        if (null !== $this->appInstancePersistentName) {
            $res['AppInstancePersistentName'] = $this->appInstancePersistentName;
        }
        if (null !== $this->appInstancePersistentStatus) {
            $res['AppInstancePersistentStatus'] = $this->appInstancePersistentStatus;
        }
        if (null !== $this->appInstanceStatus) {
            $res['AppInstanceStatus'] = $this->appInstanceStatus;
        }
        if (null !== $this->authorizedUsers) {
            $res['AuthorizedUsers'] = $this->authorizedUsers;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return persistentAppInstanceModels
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppInstanceGroupId'])) {
            $model->appInstanceGroupId = $map['AppInstanceGroupId'];
        }
        if (isset($map['AppInstanceId'])) {
            $model->appInstanceId = $map['AppInstanceId'];
        }
        if (isset($map['AppInstancePersistentId'])) {
            $model->appInstancePersistentId = $map['AppInstancePersistentId'];
        }
        if (isset($map['AppInstancePersistentName'])) {
            $model->appInstancePersistentName = $map['AppInstancePersistentName'];
        }
        if (isset($map['AppInstancePersistentStatus'])) {
            $model->appInstancePersistentStatus = $map['AppInstancePersistentStatus'];
        }
        if (isset($map['AppInstanceStatus'])) {
            $model->appInstanceStatus = $map['AppInstanceStatus'];
        }
        if (isset($map['AuthorizedUsers'])) {
            if (!empty($map['AuthorizedUsers'])) {
                $model->authorizedUsers = $map['AuthorizedUsers'];
            }
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }

        return $model;
    }
}
