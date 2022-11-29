<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Serverless\V20210924\Models\Release;

use AlibabaCloud\Tea\Model;

class codeVersion extends Model
{
    /**
     * @var string
     */
    public $branch;

    /**
     * @var string
     */
    public $commit;
    protected $_name = [
        'branch' => 'branch',
        'commit' => 'commit',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return codeVersion
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

        return $model;
    }
}
