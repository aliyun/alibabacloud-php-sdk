<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaaS\V20260318\Models\ListWorkspacesResponseBody;

use AlibabaCloud\Dara\Model;

class workspaces extends Model
{
    /**
     * @var string
     */
    public $apiHost;

    /**
     * @var int
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $regionName;

    /**
     * @var string
     */
    public $serviceSite;

    /**
     * @var string
     */
    public $workspaceId;

    /**
     * @var string
     */
    public $workspaceName;
    protected $_name = [
        'apiHost' => 'apiHost',
        'gmtCreate' => 'gmtCreate',
        'region' => 'region',
        'regionName' => 'regionName',
        'serviceSite' => 'serviceSite',
        'workspaceId' => 'workspaceId',
        'workspaceName' => 'workspaceName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiHost) {
            $res['apiHost'] = $this->apiHost;
        }

        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->region) {
            $res['region'] = $this->region;
        }

        if (null !== $this->regionName) {
            $res['regionName'] = $this->regionName;
        }

        if (null !== $this->serviceSite) {
            $res['serviceSite'] = $this->serviceSite;
        }

        if (null !== $this->workspaceId) {
            $res['workspaceId'] = $this->workspaceId;
        }

        if (null !== $this->workspaceName) {
            $res['workspaceName'] = $this->workspaceName;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['apiHost'])) {
            $model->apiHost = $map['apiHost'];
        }

        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }

        if (isset($map['region'])) {
            $model->region = $map['region'];
        }

        if (isset($map['regionName'])) {
            $model->regionName = $map['regionName'];
        }

        if (isset($map['serviceSite'])) {
            $model->serviceSite = $map['serviceSite'];
        }

        if (isset($map['workspaceId'])) {
            $model->workspaceId = $map['workspaceId'];
        }

        if (isset($map['workspaceName'])) {
            $model->workspaceName = $map['workspaceName'];
        }

        return $model;
    }
}
