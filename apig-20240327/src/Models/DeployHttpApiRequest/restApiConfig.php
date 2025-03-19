<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\DeployHttpApiRequest;

use AlibabaCloud\SDK\APIG\V20240327\Models\DeployHttpApiRequest\restApiConfig\environment;
use AlibabaCloud\Tea\Model;

class restApiConfig extends Model
{
    /**
     * @description Publication description.
     *
     * @example 用户服务API发布。
     *
     * @var string
     */
    public $description;

    /**
     * @description Publication environment configuration.
     *
     * @var environment
     */
    public $environment;

    /**
     * @description Historical version number. If this field is specified, the publication information will be based on the historical version information.
     *
     * @example apr-xxx
     *
     * @var string
     */
    public $revisionId;
    protected $_name = [
        'description' => 'description',
        'environment' => 'environment',
        'revisionId' => 'revisionId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->environment) {
            $res['environment'] = null !== $this->environment ? $this->environment->toMap() : null;
        }
        if (null !== $this->revisionId) {
            $res['revisionId'] = $this->revisionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return restApiConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['environment'])) {
            $model->environment = environment::fromMap($map['environment']);
        }
        if (isset($map['revisionId'])) {
            $model->revisionId = $map['revisionId'];
        }

        return $model;
    }
}
