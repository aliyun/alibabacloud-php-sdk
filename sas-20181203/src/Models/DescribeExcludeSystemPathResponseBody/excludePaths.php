<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeExcludeSystemPathResponseBody;

use AlibabaCloud\Tea\Model;

class excludePaths extends Model
{
    /**
     * @var string
     */
    public $path;

    /**
     * @var string
     */
    public $os;
    protected $_name = [
        'path' => 'Path',
        'os'   => 'Os',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }
        if (null !== $this->os) {
            $res['Os'] = $this->os;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return excludePaths
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }
        if (isset($map['Os'])) {
            $model->os = $map['Os'];
        }

        return $model;
    }
}
