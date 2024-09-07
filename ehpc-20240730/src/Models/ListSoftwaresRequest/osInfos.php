<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models\ListSoftwaresRequest;

use AlibabaCloud\Tea\Model;

class osInfos extends Model
{
    /**
     * @description The OS architecture. Valid values:
     *
     *   x86_64
     *   arm64
     *
     * @example x86_64
     *
     * @var string
     */
    public $architecture;

    /**
     * @description The image tag.
     *
     * @example CentOS_7.9_64
     *
     * @var string
     */
    public $osTag;
    protected $_name = [
        'architecture' => 'Architecture',
        'osTag'        => 'OsTag',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->architecture) {
            $res['Architecture'] = $this->architecture;
        }
        if (null !== $this->osTag) {
            $res['OsTag'] = $this->osTag;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return osInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Architecture'])) {
            $model->architecture = $map['Architecture'];
        }
        if (isset($map['OsTag'])) {
            $model->osTag = $map['OsTag'];
        }

        return $model;
    }
}
