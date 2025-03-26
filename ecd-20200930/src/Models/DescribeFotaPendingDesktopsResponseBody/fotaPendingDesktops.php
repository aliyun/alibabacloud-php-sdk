<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeFotaPendingDesktopsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeFotaPendingDesktopsResponseBody\fotaPendingDesktops\sessions;

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

    /**
     * @var sessions[]
     */
    public $sessions;

    /**
     * @var int
     */
    public $status;
    protected $_name = [
        'currentAppVersion' => 'CurrentAppVersion',
        'desktopId' => 'DesktopId',
        'desktopName' => 'DesktopName',
        'fotaProject' => 'FotaProject',
        'officeSiteId' => 'OfficeSiteId',
        'sessions' => 'Sessions',
        'status' => 'Status',
    ];

    public function validate()
    {
        if (\is_array($this->sessions)) {
            Model::validateArray($this->sessions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->sessions)) {
                $res['Sessions'] = [];
                $n1 = 0;
                foreach ($this->sessions as $item1) {
                    $res['Sessions'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
                $n1 = 0;
                foreach ($map['Sessions'] as $item1) {
                    $model->sessions[$n1++] = sessions::fromMap($item1);
                }
            }
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
