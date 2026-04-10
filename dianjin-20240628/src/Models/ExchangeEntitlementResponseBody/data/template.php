<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DianJin\V20240628\Models\ExchangeEntitlementResponseBody\data;

use AlibabaCloud\Dara\Model;

class template extends Model
{
    /**
     * @var string[]
     */
    public $allowedModels;

    /**
     * @var int
     */
    public $quotaLimit;

    /**
     * @var int
     */
    public $templateId;

    /**
     * @var string
     */
    public $templateName;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'allowedModels' => 'allowedModels',
        'quotaLimit' => 'quotaLimit',
        'templateId' => 'templateId',
        'templateName' => 'templateName',
        'type' => 'type',
    ];

    public function validate()
    {
        if (\is_array($this->allowedModels)) {
            Model::validateArray($this->allowedModels);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->allowedModels) {
            if (\is_array($this->allowedModels)) {
                $res['allowedModels'] = [];
                $n1 = 0;
                foreach ($this->allowedModels as $item1) {
                    $res['allowedModels'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->quotaLimit) {
            $res['quotaLimit'] = $this->quotaLimit;
        }

        if (null !== $this->templateId) {
            $res['templateId'] = $this->templateId;
        }

        if (null !== $this->templateName) {
            $res['templateName'] = $this->templateName;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
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
        if (isset($map['allowedModels'])) {
            if (!empty($map['allowedModels'])) {
                $model->allowedModels = [];
                $n1 = 0;
                foreach ($map['allowedModels'] as $item1) {
                    $model->allowedModels[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['quotaLimit'])) {
            $model->quotaLimit = $map['quotaLimit'];
        }

        if (isset($map['templateId'])) {
            $model->templateId = $map['templateId'];
        }

        if (isset($map['templateName'])) {
            $model->templateName = $map['templateName'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
