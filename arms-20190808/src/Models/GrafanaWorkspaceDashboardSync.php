<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class GrafanaWorkspaceDashboardSync extends Model
{
    /**
     * @example testTitle
     *
     * @var string
     */
    public $dashboardTitle;

    /**
     * @example https://g.console.aliyun.com/d/1098370038733503-14960236-422-3/ack-pro-apiserver
     *
     * @var string
     */
    public $dashboardURL;

    /**
     * @example xxxdvxsea
     *
     * @var string
     */
    public $dashboardUid;

    /**
     * @example 123456
     *
     * @var string
     */
    public $folderId;

    /**
     * @example test
     *
     * @var string
     */
    public $folderTitle;

    /**
     * @example https://g.console.aliyun.com/d/1098370038733503-14960236-422-3/ack-pro-apiserver
     *
     * @var string
     */
    public $folderURL;

    /**
     * @example vxeupqn
     *
     * @var string
     */
    public $folderUid;

    /**
     * @example 1
     *
     * @var string
     */
    public $orgId;

    /**
     * @example user123
     *
     * @var string
     */
    public $orgName;

    /**
     * @example normal
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'dashboardTitle' => 'dashboardTitle',
        'dashboardURL'   => 'dashboardURL',
        'dashboardUid'   => 'dashboardUid',
        'folderId'       => 'folderId',
        'folderTitle'    => 'folderTitle',
        'folderURL'      => 'folderURL',
        'folderUid'      => 'folderUid',
        'orgId'          => 'orgId',
        'orgName'        => 'orgName',
        'type'           => 'type',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return GrafanaWorkspaceDashboardSync
     */
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
