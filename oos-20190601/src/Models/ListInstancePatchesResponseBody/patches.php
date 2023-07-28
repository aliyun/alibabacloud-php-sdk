<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models\ListInstancePatchesResponseBody;

use AlibabaCloud\Tea\Model;

class patches extends Model
{
    /**
     * @description Queries the patches of an instance.
     *
     * @example “”
     *
     * @var string
     */
    public $classification;

    /**
     * @description The name of the patch.
     *
     * @example 2021-01-28T07:07:20Z
     *
     * @var string
     */
    public $installedTime;

    /**
     * @description KBId
     *
     * @example apt-utils.amd64
     *
     * @var string
     */
    public $KBId;

    /**
     * @description The status of the installation.
     *
     * @example important
     *
     * @var string
     */
    public $severity;

    /**
     * @description The time when the patch was installed.
     *
     * @example Installed
     *
     * @var string
     */
    public $status;

    /**
     * @description The classification of the patch.
     *
     * @example isc-dhcp-common.amd64:4.3.5-3ubuntu7.3
     *
     * @var string
     */
    public $title;
    protected $_name = [
        'classification' => 'Classification',
        'installedTime'  => 'InstalledTime',
        'KBId'           => 'KBId',
        'severity'       => 'Severity',
        'status'         => 'Status',
        'title'          => 'Title',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->classification) {
            $res['Classification'] = $this->classification;
        }
        if (null !== $this->installedTime) {
            $res['InstalledTime'] = $this->installedTime;
        }
        if (null !== $this->KBId) {
            $res['KBId'] = $this->KBId;
        }
        if (null !== $this->severity) {
            $res['Severity'] = $this->severity;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return patches
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Classification'])) {
            $model->classification = $map['Classification'];
        }
        if (isset($map['InstalledTime'])) {
            $model->installedTime = $map['InstalledTime'];
        }
        if (isset($map['KBId'])) {
            $model->KBId = $map['KBId'];
        }
        if (isset($map['Severity'])) {
            $model->severity = $map['Severity'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
