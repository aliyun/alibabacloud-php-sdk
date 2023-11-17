<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\XrEngine\V20230313\Models;

use AlibabaCloud\Tea\Model;

class PopGetAITryOnJobRequest extends Model
{
    /**
     * @var string
     */
    public $jwtToken;

    /**
     * @var string
     */
    public $projectId;

    /**
     * @var bool
     */
    public $withMaterial;

    /**
     * @var bool
     */
    public $withResult;
    protected $_name = [
        'jwtToken'     => 'JwtToken',
        'projectId'    => 'ProjectId',
        'withMaterial' => 'WithMaterial',
        'withResult'   => 'WithResult',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->jwtToken) {
            $res['JwtToken'] = $this->jwtToken;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->withMaterial) {
            $res['WithMaterial'] = $this->withMaterial;
        }
        if (null !== $this->withResult) {
            $res['WithResult'] = $this->withResult;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PopGetAITryOnJobRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['JwtToken'])) {
            $model->jwtToken = $map['JwtToken'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['WithMaterial'])) {
            $model->withMaterial = $map['WithMaterial'];
        }
        if (isset($map['WithResult'])) {
            $model->withResult = $map['WithResult'];
        }

        return $model;
    }
}
