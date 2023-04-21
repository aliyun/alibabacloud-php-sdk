<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class DescribeDesktopIdsByVulNamesRequest extends Model
{
    /**
     * @description The priority to fix the vulnerability or the risk level of the vulnerability. Valid values:
     *
     *   asap: high
     *   later: medium
     *   nntf: low
     *
     * @example asap
     *
     * @var string
     */
    public $necessity;

    /**
     * @description The ID of the workspace.
     *
     * @example cn-hangzhou+dir-363353****
     *
     * @var string
     */
    public $officeSiteId;

    /**
     * @description The ID of the region.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The type of the vulnerability. Valid values:
     *
     *   cve: Linux software vulnerability
     *   sys: Windows system vulnerability
     *
     * @example cve
     *
     * @var string
     */
    public $type;

    /**
     * @var string[]
     */
    public $vulName;
    protected $_name = [
        'necessity'    => 'Necessity',
        'officeSiteId' => 'OfficeSiteId',
        'regionId'     => 'RegionId',
        'type'         => 'Type',
        'vulName'      => 'VulName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->necessity) {
            $res['Necessity'] = $this->necessity;
        }
        if (null !== $this->officeSiteId) {
            $res['OfficeSiteId'] = $this->officeSiteId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->vulName) {
            $res['VulName'] = $this->vulName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDesktopIdsByVulNamesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Necessity'])) {
            $model->necessity = $map['Necessity'];
        }
        if (isset($map['OfficeSiteId'])) {
            $model->officeSiteId = $map['OfficeSiteId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['VulName'])) {
            if (!empty($map['VulName'])) {
                $model->vulName = $map['VulName'];
            }
        }

        return $model;
    }
}
