<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dms\V20250414\Models\GetWorkspaceCodePublishSettingResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dms\V20250414\Models\GetWorkspaceCodePublishSettingResponseBody\data\repos;

class data extends Model
{
    /**
     * @var string[]
     */
    public $exclude;

    /**
     * @var bool
     */
    public $lockRepoBranch;

    /**
     * @var repos[]
     */
    public $repos;
    protected $_name = [
        'exclude' => 'Exclude',
        'lockRepoBranch' => 'LockRepoBranch',
        'repos' => 'Repos',
    ];

    public function validate()
    {
        if (\is_array($this->exclude)) {
            Model::validateArray($this->exclude);
        }
        if (\is_array($this->repos)) {
            Model::validateArray($this->repos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->exclude) {
            if (\is_array($this->exclude)) {
                $res['Exclude'] = [];
                $n1 = 0;
                foreach ($this->exclude as $item1) {
                    $res['Exclude'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->lockRepoBranch) {
            $res['LockRepoBranch'] = $this->lockRepoBranch;
        }

        if (null !== $this->repos) {
            if (\is_array($this->repos)) {
                $res['Repos'] = [];
                $n1 = 0;
                foreach ($this->repos as $item1) {
                    $res['Repos'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['Exclude'])) {
            if (!empty($map['Exclude'])) {
                $model->exclude = [];
                $n1 = 0;
                foreach ($map['Exclude'] as $item1) {
                    $model->exclude[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['LockRepoBranch'])) {
            $model->lockRepoBranch = $map['LockRepoBranch'];
        }

        if (isset($map['Repos'])) {
            if (!empty($map['Repos'])) {
                $model->repos = [];
                $n1 = 0;
                foreach ($map['Repos'] as $item1) {
                    $model->repos[$n1] = repos::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
