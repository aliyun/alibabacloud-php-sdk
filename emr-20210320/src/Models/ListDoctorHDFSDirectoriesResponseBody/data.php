<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models\ListDoctorHDFSDirectoriesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Emr\V20210320\Models\ListDoctorHDFSDirectoriesResponseBody\data\metrics;

class data extends Model
{
    /**
     * @var int
     */
    public $depth;

    /**
     * @var string
     */
    public $dirPath;

    /**
     * @var string
     */
    public $group;

    /**
     * @var metrics
     */
    public $metrics;

    /**
     * @var string
     */
    public $user;
    protected $_name = [
        'depth' => 'Depth',
        'dirPath' => 'DirPath',
        'group' => 'Group',
        'metrics' => 'Metrics',
        'user' => 'User',
    ];

    public function validate()
    {
        if (null !== $this->metrics) {
            $this->metrics->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->depth) {
            $res['Depth'] = $this->depth;
        }

        if (null !== $this->dirPath) {
            $res['DirPath'] = $this->dirPath;
        }

        if (null !== $this->group) {
            $res['Group'] = $this->group;
        }

        if (null !== $this->metrics) {
            $res['Metrics'] = null !== $this->metrics ? $this->metrics->toArray($noStream) : $this->metrics;
        }

        if (null !== $this->user) {
            $res['User'] = $this->user;
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
        if (isset($map['Depth'])) {
            $model->depth = $map['Depth'];
        }

        if (isset($map['DirPath'])) {
            $model->dirPath = $map['DirPath'];
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
