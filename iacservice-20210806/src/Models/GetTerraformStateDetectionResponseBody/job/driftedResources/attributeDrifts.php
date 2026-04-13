<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models\GetTerraformStateDetectionResponseBody\job\driftedResources;

use AlibabaCloud\Dara\Model;

class attributeDrifts extends Model
{
    /**
     * @var string
     */
    public $attributePath;

    /**
     * @var string
     */
    public $remoteValue;

    /**
     * @var string
     */
    public $stateValue;
    protected $_name = [
        'attributePath' => 'attributePath',
        'remoteValue' => 'remoteValue',
        'stateValue' => 'stateValue',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attributePath) {
            $res['attributePath'] = $this->attributePath;
        }

        if (null !== $this->remoteValue) {
            $res['remoteValue'] = $this->remoteValue;
        }

        if (null !== $this->stateValue) {
            $res['stateValue'] = $this->stateValue;
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
        if (isset($map['attributePath'])) {
            $model->attributePath = $map['attributePath'];
        }

        if (isset($map['remoteValue'])) {
            $model->remoteValue = $map['remoteValue'];
        }

        if (isset($map['stateValue'])) {
            $model->stateValue = $map['stateValue'];
        }

        return $model;
    }
}
