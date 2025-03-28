<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devs\V20230714\Models;

use AlibabaCloud\Dara\Model;

class GitEventSnapshot extends Model
{
    /**
     * @var string
     */
    public $branch;

    /**
     * @var string
     */
    public $commitID;

    /**
     * @var string
     */
    public $tag;
    protected $_name = [
        'branch' => 'branch',
        'commitID' => 'commitID',
        'tag' => 'tag',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
