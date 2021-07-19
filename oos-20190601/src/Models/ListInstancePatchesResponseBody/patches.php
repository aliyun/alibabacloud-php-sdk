<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models\ListInstancePatchesResponseBody;

use AlibabaCloud\Tea\Model;

class patches extends Model
{
    /**
     * @var string
     */
    public $severity;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $installedTime;

    /**
     * @var string
     */
    public $KBId;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $classification;
    protected $_name = [
        'severity'       => 'Severity',
        'status'         => 'Status',
        'installedTime'  => 'InstalledTime',
        'KBId'           => 'KBId',
        'title'          => 'Title',
        'classification' => 'Classification',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->severity) {
            $res['Severity'] = $this->severity;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->installedTime) {
            $res['InstalledTime'] = $this->installedTime;
        }
        if (null !== $this->KBId) {
            $res['KBId'] = $this->KBId;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->classification) {
            $res['Classification'] = $this->classification;
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
        if (isset($map['Severity'])) {
            $model->severity = $map['Severity'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['InstalledTime'])) {
            $model->installedTime = $map['InstalledTime'];
        }
        if (isset($map['KBId'])) {
            $model->KBId = $map['KBId'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['Classification'])) {
            $model->classification = $map['Classification'];
        }

        return $model;
    }
}
