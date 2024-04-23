<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class GetMLServiceResultsRequest extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $allowBuiltin;

    /**
     * @var MLServiceAnalysisParam
     */
    public $body;

    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'allowBuiltin' => 'allowBuiltin',
        'body'         => 'body',
        'version'      => 'version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->allowBuiltin) {
            $res['allowBuiltin'] = $this->allowBuiltin;
        }
        if (null !== $this->body) {
            $res['body'] = null !== $this->body ? $this->body->toMap() : null;
        }
        if (null !== $this->version) {
            $res['version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetMLServiceResultsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['allowBuiltin'])) {
            $model->allowBuiltin = $map['allowBuiltin'];
        }
        if (isset($map['body'])) {
            $model->body = MLServiceAnalysisParam::fromMap($map['body']);
        }
        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        return $model;
    }
}
