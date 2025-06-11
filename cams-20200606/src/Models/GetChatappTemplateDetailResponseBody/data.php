<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models\GetChatappTemplateDetailResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cams\V20200606\Models\GetChatappTemplateDetailResponseBody\data\components;

class data extends Model
{
    /**
     * @var bool
     */
    public $allowSend;

    /**
     * @var string
     */
    public $auditStatus;

    /**
     * @var string
     */
    public $category;

    /**
     * @var bool
     */
    public $categoryChangePaused;

    /**
     * @var components[]
     */
    public $components;

    /**
     * @var string[]
     */
    public $example;

    /**
     * @var string
     */
    public $language;

    /**
     * @var int
     */
    public $messageSendTtlSeconds;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $qualityScore;

    /**
     * @var string
     */
    public $reason;

    /**
     * @var string
     */
    public $templateCode;

    /**
     * @var string
     */
    public $templateType;
    protected $_name = [
        'allowSend' => 'AllowSend',
        'auditStatus' => 'AuditStatus',
        'category' => 'Category',
        'categoryChangePaused' => 'CategoryChangePaused',
        'components' => 'Components',
        'example' => 'Example',
        'language' => 'Language',
        'messageSendTtlSeconds' => 'MessageSendTtlSeconds',
        'name' => 'Name',
        'qualityScore' => 'QualityScore',
        'reason' => 'Reason',
        'templateCode' => 'TemplateCode',
        'templateType' => 'TemplateType',
    ];

    public function validate()
    {
        if (\is_array($this->components)) {
            Model::validateArray($this->components);
        }
        if (\is_array($this->example)) {
            Model::validateArray($this->example);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->allowSend) {
            $res['AllowSend'] = $this->allowSend;
        }

        if (null !== $this->auditStatus) {
            $res['AuditStatus'] = $this->auditStatus;
        }

        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }

        if (null !== $this->categoryChangePaused) {
            $res['CategoryChangePaused'] = $this->categoryChangePaused;
        }

        if (null !== $this->components) {
            if (\is_array($this->components)) {
                $res['Components'] = [];
                $n1 = 0;
                foreach ($this->components as $item1) {
                    $res['Components'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->example) {
            if (\is_array($this->example)) {
                $res['Example'] = [];
                foreach ($this->example as $key1 => $value1) {
                    $res['Example'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }

        if (null !== $this->messageSendTtlSeconds) {
            $res['MessageSendTtlSeconds'] = $this->messageSendTtlSeconds;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->qualityScore) {
            $res['QualityScore'] = $this->qualityScore;
        }

        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }

        if (null !== $this->templateCode) {
            $res['TemplateCode'] = $this->templateCode;
        }

        if (null !== $this->templateType) {
            $res['TemplateType'] = $this->templateType;
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
        if (isset($map['AllowSend'])) {
            $model->allowSend = $map['AllowSend'];
        }

        if (isset($map['AuditStatus'])) {
            $model->auditStatus = $map['AuditStatus'];
        }

        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }

        if (isset($map['CategoryChangePaused'])) {
            $model->categoryChangePaused = $map['CategoryChangePaused'];
        }

        if (isset($map['Components'])) {
            if (!empty($map['Components'])) {
                $model->components = [];
                $n1 = 0;
                foreach ($map['Components'] as $item1) {
                    $model->components[$n1++] = components::fromMap($item1);
                }
            }
        }

        if (isset($map['Example'])) {
            if (!empty($map['Example'])) {
                $model->example = [];
                foreach ($map['Example'] as $key1 => $value1) {
                    $model->example[$key1] = $value1;
                }
            }
        }

        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }

        if (isset($map['MessageSendTtlSeconds'])) {
            $model->messageSendTtlSeconds = $map['MessageSendTtlSeconds'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['QualityScore'])) {
            $model->qualityScore = $map['QualityScore'];
        }

        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }

        if (isset($map['TemplateCode'])) {
            $model->templateCode = $map['TemplateCode'];
        }

        if (isset($map['TemplateType'])) {
            $model->templateType = $map['TemplateType'];
        }

        return $model;
    }
}
