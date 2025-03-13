<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\CreateBranchResponseBody;

use AlibabaCloud\SDK\Devops\V20210625\Models\CreateBranchResponseBody\result\commit;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var commit
     */
    public $commit;

    /**
     * @example createBranch
     *
     * @var string
     */
    public $name;

    /**
     * @example false
     *
     * @var bool
     */
    public $protected;
    protected $_name = [
        'commit'    => 'commit',
        'name'      => 'name',
        'protected' => 'protected',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->commit) {
            $res['commit'] = null !== $this->commit ? $this->commit->toMap() : null;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->protected) {
            $res['protected'] = $this->protected;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['commit'])) {
            $model->commit = commit::fromMap($map['commit']);
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['protected'])) {
            $model->protected = $map['protected'];
        }

        return $model;
    }
}
