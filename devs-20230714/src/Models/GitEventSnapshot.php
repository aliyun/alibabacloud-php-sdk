<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devs\V20230714\Models;

use AlibabaCloud\Tea\Model;

class GitEventSnapshot extends Model
{
    /**
     * @example main
     *
     * @var string
     */
    public $branch;

    /**
     * @example 12721ec262d03a93809ba2bbc717963cb298ceca
     *
     * @var string
     */
    public $commitID;

    /**
     * @example 1.0
     *
     * @var string
     */
    public $tag;
    protected $_name = [
        'branch'   => 'branch',
        'commitID' => 'commitID',
        'tag'      => 'tag',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->branch) {
            $res['branch'] = $this->branch;
        }
        if (null !== $this->commitID) {
            $res['commitID'] = $this->commitID;
        }
        if (null !== $this->tag) {
            $res['tag'] = $this->tag;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GitEventSnapshot
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['branch'])) {
            $model->branch = $map['branch'];
        }
        if (isset($map['commitID'])) {
            $model->commitID = $map['commitID'];
        }
        if (isset($map['tag'])) {
            $model->tag = $map['tag'];
        }

        return $model;
    }
}
