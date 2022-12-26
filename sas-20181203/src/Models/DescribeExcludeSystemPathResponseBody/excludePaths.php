<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeExcludeSystemPathResponseBody;

use AlibabaCloud\Tea\Model;

class excludePaths extends Model
{
    /**
     * @example linux
     *
     * @var string
     */
    public $os;

    /**
     * @example /bin/
     *
     * @var string
     */
    public $path;
    protected $_name = [
        'os'   => 'Os',
        'path' => 'Path',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return excludePaths
     */
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
