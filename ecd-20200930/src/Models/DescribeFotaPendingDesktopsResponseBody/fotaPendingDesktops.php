<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeFotaPendingDesktopsResponseBody;

use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeFotaPendingDesktopsResponseBody\fotaPendingDesktops\sessions;
use AlibabaCloud\Tea\Model;

class fotaPendingDesktops extends Model
{
    /**
     * @description The current version of the image used by the cloud computer.
     *
     * @example 0.0.1-D-20220513.143129
     *
     * @var string
     */
    public $currentAppVersion;

    /**
     * @description The ID of the cloud computer.
     *
     * @example ecd-bvdtu3jn97o1r****
     *
     * @var string
     */
    public $desktopId;

    /**
     * @description The name of the cloud computer.
     *
     * @example TestDesktop
     *
     * @var string
     */
    public $desktopName;

    /**
     * @description > This parameter is not publicly available.
     *
     * @example To be hidden
     *
     * @var string
     */
    public $fotaProject;

    /**
     * @description The ID of the office network.
     *
     * @example cn-hangzhou+dir-815419****
     *
     * @var string
     */
    public $officeSiteId;

    /**
     * @description The connected sessions.
     *
     * @var sessions[]
     */
    public $sessions;

    /**
     * @description The status of the cloud computer.
     *
     * Valid values:
     *
     *   0: The cloud computer is being created.
     *   1: The cloud computer is being started.
     *   2: The cloud computer is running.
     *   3: The cloud computer is being stopped.
     *   5: The cloud computer is stopped.
     *   6: The cloud computer expires.
     *   7: The cloud computer is deleted.
     *   9: Failed to create the cloud computer.
     *
     * @example 2
     *
     * @var int
     */
    public $status;
    protected $_name = [
        'currentAppVersion' => 'CurrentAppVersion',
        'desktopId'         => 'DesktopId',
        'desktopName'       => 'DesktopName',
        'fotaProject'       => 'FotaProject',
        'officeSiteId'      => 'OfficeSiteId',
        'sessions'          => 'Sessions',
        'status'            => 'Status',
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
        if (null !== $this->sessions) {
            $res['Sessions'] = [];
            if (null !== $this->sessions && \is_array($this->sessions)) {
                $n = 0;
                foreach ($this->sessions as $item) {
                    $res['Sessions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['Sessions'])) {
            if (!empty($map['Sessions'])) {
                $model->sessions = [];
                $n               = 0;
                foreach ($map['Sessions'] as $item) {
                    $model->sessions[$n++] = null !== $item ? sessions::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
