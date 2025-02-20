<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\GetBranchInfoResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetBranchInfoResponseBody\result\commit;

class result extends Model
{
    /**
     * @var commit
     */
    public $commit;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $protected;
    protected $_name = [
        'commit'    => 'commit',
        'name'      => 'name',
        'protected' => 'protected',
    ];

    public function validate()
    {
        if (null !== $this->commit) {
            $this->commit->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->commit) {
            $res['commit'] = null !== $this->commit ? $this->commit->toArray($noStream) : $this->commit;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->protected) {
            $res['protected'] = $this->protected;
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
