<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\CreateClusterRequest;

use AlibabaCloud\Tea\Model;

class postInstallScript extends Model
{
    /**
     * @description The node of the RAM role.
     *
     * Valid values of N: 0 to 4
     *
     *   If the DeployMode parameter is set to Standard, the following values are valid: scheduler, account, login, and compute. Separate multiple values with commas (,).
     *   If the DeployMode parameter is set to Simple, the following values are valid: manager, login, and compute. Separate multiple values with commas (,).
     *   If the DeployMode parameter is set to Tiny, the following values are valid: manager and compute.
     *
     * @example bashfile.sh
     *
     * @var string
     */
    public $args;

    /**
     * @description The key of the tag.
     *
     * @example /opt/job.sh
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
     * @return postInstallScript
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
