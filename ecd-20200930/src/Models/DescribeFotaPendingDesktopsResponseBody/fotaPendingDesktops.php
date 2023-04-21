<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeFotaPendingDesktopsResponseBody;

use AlibabaCloud\Tea\Model;

class fotaPendingDesktops extends Model
{
    /**
     * @description The image version of the cloud desktop.
     *
     * @example 0.0.1-D-20220513.143129
     *
     * @var string
     */
    public $currentAppVersion;

    /**
     * @description The ID of the cloud desktop.
     *
     * @example ecd-bvdtu3jn97o1r****
     *
     * @var string
     */
    public $desktopId;

    /**
     * @description The name of the cloud desktop.
     *
     * @example TestDesktop
     *
     * @var string
     */
    public $desktopName;

    /**
     * @example To be hidden.
     *
     * @var string
     */
    public $fotaProject;

    /**
     * @description The ID of the workspace.
     *
     * @example cn-hangzhou+dir-815419****
     *
     * @var string
     */
    public $officeSiteId;
    protected $_name = [
        'currentAppVersion' => 'CurrentAppVersion',
        'desktopId'         => 'DesktopId',
        'desktopName'       => 'DesktopName',
        'fotaProject'       => 'FotaProject',
        'officeSiteId'      => 'OfficeSiteId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentAppVersion) {
            $res['CurrentAppVersion'] = $this->currentAppVersion;
        }
        if (null !== $this->desktopId) {
            $res['DesktopId'] = $this->desktopId;
        }
        if (null !== $this->desktopName) {
            $res['DesktopName'] = $this->desktopName;
        }
        if (null !== $this->fotaProject) {
            $res['FotaProject'] = $this->fotaProject;
        }
        if (null !== $this->officeSiteId) {
            $res['OfficeSiteId'] = $this->officeSiteId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return fotaPendingDesktops
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentAppVersion'])) {
            $model->currentAppVersion = $map['CurrentAppVersion'];
        }
        if (isset($map['DesktopId'])) {
            $model->desktopId = $map['DesktopId'];
        }
        if (isset($map['DesktopName'])) {
            $model->desktopName = $map['DesktopName'];
        }
        if (isset($map['FotaProject'])) {
            $model->fotaProject = $map['FotaProject'];
        }
        if (isset($map['OfficeSiteId'])) {
            $model->officeSiteId = $map['OfficeSiteId'];
        }

        return $model;
    }
}
