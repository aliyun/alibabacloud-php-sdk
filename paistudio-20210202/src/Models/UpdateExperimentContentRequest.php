<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20210202\Models;

use AlibabaCloud\Tea\Model;

class UpdateExperimentContentRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example {     "metadata": {       "name": "实验名称",       "id": "pai_exp_xxxdfafafasfa",       "desc": "实验描述",     },     "nodes": [     ],     "edges": [     ],     "globalParams": [     ],     "globalSettings":[     ]  }
     *
     * @var string
     */
    public $content;

    /**
     * @description This parameter is required.
     *
     * @example 11
     *
     * @var int
     */
    public $version;
    protected $_name = [
        'content' => 'Content',
        'version' => 'Version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateExperimentContentRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
