<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorHDFSDirectoryResponseBody;

use AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorHDFSDirectoryResponseBody\data\metrics;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The directory level.
     *
     * @example 2
     *
     * @var int
     */
    public $depth;

    /**
     * @description The group to which the directory belongs.
     *
     * @example DW
     *
     * @var string
     */
    public $group;

    /**
     * @description The metric information.
     *
     * @var metrics
     */
    public $metrics;

    /**
     * @description The directory owner.
     *
     * @example DW
     *
     * @var string
     */
    public $user;
    protected $_name = [
        'depth'   => 'Depth',
        'group'   => 'Group',
        'metrics' => 'Metrics',
        'user'    => 'User',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->depth) {
            $res['Depth'] = $this->depth;
        }
        if (null !== $this->group) {
            $res['Group'] = $this->group;
        }
        if (null !== $this->metrics) {
            $res['Metrics'] = null !== $this->metrics ? $this->metrics->toMap() : null;
        }
        if (null !== $this->user) {
            $res['User'] = $this->user;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Depth'])) {
            $model->depth = $map['Depth'];
        }
        if (isset($map['Group'])) {
            $model->group = $map['Group'];
        }
        if (isset($map['Metrics'])) {
            $model->metrics = metrics::fromMap($map['Metrics']);
        }
        if (isset($map['User'])) {
            $model->user = $map['User'];
        }

        return $model;
    }
}
