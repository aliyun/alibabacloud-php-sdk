<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeExcludeSystemPathResponseBody;

use AlibabaCloud\Dara\Model;

class excludePaths extends Model
{
    /**
     * @var string
     */
    public $os;

    /**
     * @var string
     */
    public $path;
    protected $_name = [
        'os' => 'Os',
        'path' => 'Path',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->os) {
            $res['Os'] = $this->os;
        }

        if (null !== $this->path) {
            $res['Path'] = $this->path;
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
        if (isset($map['Os'])) {
            $model->os = $map['Os'];
        }

        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }

        return $model;
    }
}
