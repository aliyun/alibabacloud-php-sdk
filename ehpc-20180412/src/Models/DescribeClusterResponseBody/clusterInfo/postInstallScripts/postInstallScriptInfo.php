<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeClusterResponseBody\clusterInfo\postInstallScripts;

use AlibabaCloud\Tea\Model;

class postInstallScriptInfo extends Model
{
    /**
     * @var string
     */
    public $url;

    /**
     * @var string
     */
    public $args;
    protected $_name = [
        'url'  => 'Url',
        'args' => 'Args',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }
        if (null !== $this->args) {
            $res['Args'] = $this->args;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return postInstallScriptInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }
        if (isset($map['Args'])) {
            $model->args = $map['Args'];
        }

        return $model;
    }
}
