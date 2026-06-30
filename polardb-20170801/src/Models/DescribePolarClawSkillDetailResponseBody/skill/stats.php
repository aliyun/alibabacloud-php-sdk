<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribePolarClawSkillDetailResponseBody\skill;

use AlibabaCloud\Dara\Model;

class stats extends Model
{
    /**
     * @var int
     */
    public $comments;

    /**
     * @var int
     */
    public $downloads;

    /**
     * @var int
     */
    public $installsAllTime;

    /**
     * @var int
     */
    public $installsCurrent;

    /**
     * @var int
     */
    public $stars;

    /**
     * @var int
     */
    public $versions;
    protected $_name = [
        'comments' => 'Comments',
        'downloads' => 'Downloads',
        'installsAllTime' => 'InstallsAllTime',
        'installsCurrent' => 'InstallsCurrent',
        'stars' => 'Stars',
        'versions' => 'Versions',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->comments) {
            $res['Comments'] = $this->comments;
        }

        if (null !== $this->downloads) {
            $res['Downloads'] = $this->downloads;
        }

        if (null !== $this->installsAllTime) {
            $res['InstallsAllTime'] = $this->installsAllTime;
        }

        if (null !== $this->installsCurrent) {
            $res['InstallsCurrent'] = $this->installsCurrent;
        }

        if (null !== $this->stars) {
            $res['Stars'] = $this->stars;
        }

        if (null !== $this->versions) {
            $res['Versions'] = $this->versions;
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
        if (isset($map['Comments'])) {
            $model->comments = $map['Comments'];
        }

        if (isset($map['Downloads'])) {
            $model->downloads = $map['Downloads'];
        }

        if (isset($map['InstallsAllTime'])) {
            $model->installsAllTime = $map['InstallsAllTime'];
        }

        if (isset($map['InstallsCurrent'])) {
            $model->installsCurrent = $map['InstallsCurrent'];
        }

        if (isset($map['Stars'])) {
            $model->stars = $map['Stars'];
        }

        if (isset($map['Versions'])) {
            $model->versions = $map['Versions'];
        }

        return $model;
    }
}
