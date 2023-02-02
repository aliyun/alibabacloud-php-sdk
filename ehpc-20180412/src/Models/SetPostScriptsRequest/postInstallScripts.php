<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\SetPostScriptsRequest;

use AlibabaCloud\Tea\Model;

class postInstallScripts extends Model
{
    /**
     * @example -h
     *
     * @var string
     */
    public $args;

    /**
     * @example https://bucket.oss-cn-shanghai.aliyuncs.com/postscript_examples.sh
     *
     * @var string
     */
    public $url;
    protected $_name = [
        'args' => 'Args',
        'url'  => 'Url',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->args) {
            $res['Args'] = $this->args;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return postInstallScripts
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Args'])) {
            $model->args = $map['Args'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
