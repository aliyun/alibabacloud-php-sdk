<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Tea\Model;

class SourceCodeRepoBranch extends Model
{
    /**
     * @var string
     */
    public $commitId;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'commitId' => 'CommitId',
        'name'     => 'Name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->commitId) {
            $res['CommitId'] = $this->commitId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SourceCodeRepoBranch
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CommitId'])) {
            $model->commitId = $map['CommitId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
