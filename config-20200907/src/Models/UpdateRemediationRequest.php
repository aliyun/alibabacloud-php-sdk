<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Dara\Model;

class UpdateRemediationRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;
    /**
     * @var string
     */
    public $invokeType;
    /**
     * @var string
     */
    public $params;
    /**
     * @var string
     */
    public $remediationId;
    /**
     * @var string
     */
    public $remediationTemplateId;
    /**
     * @var string
     */
    public $remediationType;
    /**
     * @var string
     */
    public $sourceType;
    protected $_name = [
        'clientToken'           => 'ClientToken',
        'invokeType'            => 'InvokeType',
        'params'                => 'Params',
        'remediationId'         => 'RemediationId',
        'remediationTemplateId' => 'RemediationTemplateId',
        'remediationType'       => 'RemediationType',
        'sourceType'            => 'SourceType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->invokeType) {
            $res['InvokeType'] = $this->invokeType;
        }

        if (null !== $this->params) {
            $res['Params'] = $this->params;
        }

        if (null !== $this->remediationId) {
            $res['RemediationId'] = $this->remediationId;
        }

        if (null !== $this->remediationTemplateId) {
            $res['RemediationTemplateId'] = $this->remediationTemplateId;
        }

        if (null !== $this->remediationType) {
            $res['RemediationType'] = $this->remediationType;
        }

        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
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
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['InvokeType'])) {
            $model->invokeType = $map['InvokeType'];
        }

        if (isset($map['Params'])) {
            $model->params = $map['Params'];
        }

        if (isset($map['RemediationId'])) {
            $model->remediationId = $map['RemediationId'];
        }

        if (isset($map['RemediationTemplateId'])) {
            $model->remediationTemplateId = $map['RemediationTemplateId'];
        }

        if (isset($map['RemediationType'])) {
            $model->remediationType = $map['RemediationType'];
        }

        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }

        return $model;
    }
}
