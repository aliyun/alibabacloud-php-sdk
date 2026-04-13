<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models\GetTerraformStateDetectionResponseBody\job\changedResources;

use AlibabaCloud\Dara\Model;

class attributeChanges extends Model
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
    public $templateValue;
    protected $_name = [
        'attributePath' => 'attributePath',
        'remoteValue' => 'remoteValue',
        'templateValue' => 'templateValue',
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

        if (null !== $this->templateValue) {
            $res['templateValue'] = $this->templateValue;
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

        if (isset($map['templateValue'])) {
            $model->templateValue = $map['templateValue'];
        }

        return $model;
    }
}
