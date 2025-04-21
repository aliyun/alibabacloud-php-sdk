<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cams\V20200606\Models\CreateChatappTemplateRequest\components;

class CreateChatappTemplateRequest extends Model
{
    /**
     * @var bool
     */
    public $allowCategoryChange;

    /**
     * @var string
     */
    public $category;

    /**
     * @var components[]
     */
    public $components;

    /**
     * @var string
     */
    public $custSpaceId;

    /**
     * @var string
     */
    public $custWabaId;

    /**
     * @var string[]
     */
    public $example;

    /**
     * @var string
     */
    public $isvCode;

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
    public $templateType;
    protected $_name = [
        'allowCategoryChange' => 'AllowCategoryChange',
        'category' => 'Category',
        'components' => 'Components',
        'custSpaceId' => 'CustSpaceId',
        'custWabaId' => 'CustWabaId',
        'example' => 'Example',
        'isvCode' => 'IsvCode',
        'language' => 'Language',
        'messageSendTtlSeconds' => 'MessageSendTtlSeconds',
        'name' => 'Name',
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
        if (null !== $this->allowCategoryChange) {
            $res['AllowCategoryChange'] = $this->allowCategoryChange;
        }

        if (null !== $this->category) {
            $res['Category'] = $this->category;
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

        if (null !== $this->custSpaceId) {
            $res['CustSpaceId'] = $this->custSpaceId;
        }

        if (null !== $this->custWabaId) {
            $res['CustWabaId'] = $this->custWabaId;
        }

        if (null !== $this->example) {
            if (\is_array($this->example)) {
                $res['Example'] = [];
                foreach ($this->example as $key1 => $value1) {
                    $res['Example'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->isvCode) {
            $res['IsvCode'] = $this->isvCode;
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
        if (isset($map['AllowCategoryChange'])) {
            $model->allowCategoryChange = $map['AllowCategoryChange'];
        }

        if (isset($map['Category'])) {
            $model->category = $map['Category'];
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

        if (isset($map['CustSpaceId'])) {
            $model->custSpaceId = $map['CustSpaceId'];
        }

        if (isset($map['CustWabaId'])) {
            $model->custWabaId = $map['CustWabaId'];
        }

        if (isset($map['Example'])) {
            if (!empty($map['Example'])) {
                $model->example = [];
                foreach ($map['Example'] as $key1 => $value1) {
                    $model->example[$key1] = $value1;
                }
            }
        }

        if (isset($map['IsvCode'])) {
            $model->isvCode = $map['IsvCode'];
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

        if (isset($map['TemplateType'])) {
            $model->templateType = $map['TemplateType'];
        }

        return $model;
    }
}
