<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeFotaPendingDesktopsResponseBody;

use AlibabaCloud\Tea\Model;

class fotaPendingDesktops extends Model
{
    /**
     * @var string
     */
    public $currentAppVersion;

    /**
     * @var string
     */
    public $desktopId;

    /**
     * @var string
     */
    public $desktopName;

    /**
     * @var string
     */
    public $fotaProject;

    /**
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
