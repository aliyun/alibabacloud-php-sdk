<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Dara\Model;

class GrafanaWorkspaceDashboardSync extends Model
{
    /**
     * @var string
     */
    public $dashboardTitle;

    /**
     * @var string
     */
    public $dashboardURL;

    /**
     * @var string
     */
    public $dashboardUid;

    /**
     * @var string
     */
    public $folderId;

    /**
     * @var string
     */
    public $folderTitle;

    /**
     * @var string
     */
    public $folderURL;

    /**
     * @var string
     */
    public $folderUid;

    /**
     * @var string
     */
    public $orgId;

    /**
     * @var string
     */
    public $orgName;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'dashboardTitle' => 'dashboardTitle',
        'dashboardURL' => 'dashboardURL',
        'dashboardUid' => 'dashboardUid',
        'folderId' => 'folderId',
        'folderTitle' => 'folderTitle',
        'folderURL' => 'folderURL',
        'folderUid' => 'folderUid',
        'orgId' => 'orgId',
        'orgName' => 'orgName',
        'type' => 'type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dashboardTitle) {
            $res['dashboardTitle'] = $this->dashboardTitle;
        }

        if (null !== $this->dashboardURL) {
            $res['dashboardURL'] = $this->dashboardURL;
        }

        if (null !== $this->dashboardUid) {
            $res['dashboardUid'] = $this->dashboardUid;
        }

        if (null !== $this->folderId) {
            $res['folderId'] = $this->folderId;
        }

        if (null !== $this->folderTitle) {
            $res['folderTitle'] = $this->folderTitle;
        }

        if (null !== $this->folderURL) {
            $res['folderURL'] = $this->folderURL;
        }

        if (null !== $this->folderUid) {
            $res['folderUid'] = $this->folderUid;
        }

        if (null !== $this->orgId) {
            $res['orgId'] = $this->orgId;
        }

        if (null !== $this->orgName) {
            $res['orgName'] = $this->orgName;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
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
        if (isset($map['dashboardTitle'])) {
            $model->dashboardTitle = $map['dashboardTitle'];
        }

        if (isset($map['dashboardURL'])) {
            $model->dashboardURL = $map['dashboardURL'];
        }

        if (isset($map['dashboardUid'])) {
            $model->dashboardUid = $map['dashboardUid'];
        }

        if (isset($map['folderId'])) {
            $model->folderId = $map['folderId'];
        }

        if (isset($map['folderTitle'])) {
            $model->folderTitle = $map['folderTitle'];
        }

        if (isset($map['folderURL'])) {
            $model->folderURL = $map['folderURL'];
        }

        if (isset($map['folderUid'])) {
            $model->folderUid = $map['folderUid'];
        }

        if (isset($map['orgId'])) {
            $model->orgId = $map['orgId'];
        }

        if (isset($map['orgName'])) {
            $model->orgName = $map['orgName'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
