<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models\CreateFileUncompressionTaskRequest;

use AlibabaCloud\Tea\Model;

class target extends Model
{
    /**
     * @example oss://imm-apitest-fxf1/test/TaskResultURI.json
     *
     * @var string
     */
    public $manifestURI;

    /**
     * @example oss://imm-apitest-fxf1/test
     *
     * @var string
     */
    public $URI;
    protected $_name = [
        'manifestURI' => 'ManifestURI',
        'URI'         => 'URI',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->manifestURI) {
            $res['ManifestURI'] = $this->manifestURI;
        }
        if (null !== $this->URI) {
            $res['URI'] = $this->URI;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return target
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ManifestURI'])) {
            $model->manifestURI = $map['ManifestURI'];
        }
        if (isset($map['URI'])) {
            $model->URI = $map['URI'];
        }

        return $model;
    }
}
