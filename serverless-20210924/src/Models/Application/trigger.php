<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Serverless\V20210924\Models\Application;

use AlibabaCloud\Tea\Model;

class trigger extends Model
{
    /**
     * @var string
     */
    public $branch;

    /**
     * @var string
     */
    public $commit;

    /**
     * @var string
     */
    public $on;
    protected $_name = [
        'branch' => 'branch',
        'commit' => 'commit',
        'on'     => 'on',
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
        if (null !== $this->commit) {
            $res['commit'] = $this->commit;
        }
        if (null !== $this->on) {
            $res['on'] = $this->on;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return trigger
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['branch'])) {
            $model->branch = $map['branch'];
        }
        if (isset($map['commit'])) {
            $model->commit = $map['commit'];
        }
        if (isset($map['on'])) {
            $model->on = $map['on'];
        }

        return $model;
    }
}
