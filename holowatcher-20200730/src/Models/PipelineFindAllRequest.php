<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Holowatcher\V20200730\Models;

use AlibabaCloud\Tea\Model;

class PipelineFindAllRequest extends Model
{
    /**
     * @var string
     */
    public $aliyunJwt;

    /**
     * @var string
     */
    public $code;

    /**
     * @var bool
     */
    public $enabled;

    /**
     * @var bool
     */
    public $exposed;

    /**
     * @var bool
     */
    public $isRoot;
    protected $_name = [
        'aliyunJwt' => 'AliyunJwt',
        'code'      => 'Code',
        'enabled'   => 'Enabled',
        'exposed'   => 'Exposed',
        'isRoot'    => 'IsRoot',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliyunJwt) {
            $res['AliyunJwt'] = $this->aliyunJwt;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }
        if (null !== $this->exposed) {
            $res['Exposed'] = $this->exposed;
        }
        if (null !== $this->isRoot) {
            $res['IsRoot'] = $this->isRoot;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PipelineFindAllRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliyunJwt'])) {
            $model->aliyunJwt = $map['AliyunJwt'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }
        if (isset($map['Exposed'])) {
            $model->exposed = $map['Exposed'];
        }
        if (isset($map['IsRoot'])) {
            $model->isRoot = $map['IsRoot'];
        }

        return $model;
    }
}
