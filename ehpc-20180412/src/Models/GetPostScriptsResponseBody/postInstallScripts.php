<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\GetPostScriptsResponseBody;

use AlibabaCloud\Tea\Model;

class postInstallScripts extends Model
{
    /**
     * @description The parameter that is used to run the Nth post-installation script. Valid values of N: 1 to 16.
     *
     * @example -h
     *
     * @var string
     */
    public $args;

    /**
     * @description The URL that is used to download the Nth post-installation script. Valid values of N: 1 to 16.
     *
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
