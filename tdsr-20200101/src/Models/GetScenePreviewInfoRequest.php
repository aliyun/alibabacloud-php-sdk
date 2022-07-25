<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tdsr\V20200101\Models;

use AlibabaCloud\Tea\Model;

class GetScenePreviewInfoRequest extends Model
{
    /**
     * @var string
     */
    public $domain;

    /**
     * @var bool
     */
    public $enabled;

    /**
     * @var string
     */
    public $modelToken;
    protected $_name = [
        'domain'     => 'Domain',
        'enabled'    => 'Enabled',
        'modelToken' => 'ModelToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }
        if (null !== $this->modelToken) {
            $res['ModelToken'] = $this->modelToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetScenePreviewInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }
        if (isset($map['ModelToken'])) {
            $model->modelToken = $map['ModelToken'];
        }

        return $model;
    }
}
