<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetEventStreamingResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\BaiLianAgentTransformParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\DashScopeTransformParameters;

class transforms extends Model
{
    /**
     * @var string
     */
    public $arn;

    /**
     * @var BaiLianAgentTransformParameters
     */
    public $baiLianAgentTransformParameters;

    /**
     * @var DashScopeTransformParameters
     */
    public $dashScopeTransformParameters;
    protected $_name = [
        'arn' => 'Arn',
        'baiLianAgentTransformParameters' => 'BaiLianAgentTransformParameters',
        'dashScopeTransformParameters' => 'DashScopeTransformParameters',
    ];

    public function validate()
    {
        if (null !== $this->baiLianAgentTransformParameters) {
            $this->baiLianAgentTransformParameters->validate();
        }
        if (null !== $this->dashScopeTransformParameters) {
            $this->dashScopeTransformParameters->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->arn) {
            $res['Arn'] = $this->arn;
        }

        if (null !== $this->baiLianAgentTransformParameters) {
            $res['BaiLianAgentTransformParameters'] = null !== $this->baiLianAgentTransformParameters ? $this->baiLianAgentTransformParameters->toArray($noStream) : $this->baiLianAgentTransformParameters;
        }

        if (null !== $this->dashScopeTransformParameters) {
            $res['DashScopeTransformParameters'] = null !== $this->dashScopeTransformParameters ? $this->dashScopeTransformParameters->toArray($noStream) : $this->dashScopeTransformParameters;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Arn'])) {
            $model->arn = $map['Arn'];
        }

        if (isset($map['BaiLianAgentTransformParameters'])) {
            $model->baiLianAgentTransformParameters = BaiLianAgentTransformParameters::fromMap($map['BaiLianAgentTransformParameters']);
        }

        if (isset($map['DashScopeTransformParameters'])) {
            $model->dashScopeTransformParameters = DashScopeTransformParameters::fromMap($map['DashScopeTransformParameters']);
        }

        return $model;
    }
}
