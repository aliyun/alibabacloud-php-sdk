<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIRegistry\V20260317\Models;

use AlibabaCloud\Dara\Model;

class UpdatePromptRequest extends Model
{
    /**
     * @var string[]
     */
    public $bizTags;

    /**
     * @var string
     */
    public $description;

    /**
     * @var mixed[]
     */
    public $labels;

    /**
     * @var string
     */
    public $namespaceId;

    /**
     * @var string
     */
    public $promptKey;
    protected $_name = [
        'bizTags' => 'BizTags',
        'description' => 'Description',
        'labels' => 'Labels',
        'namespaceId' => 'NamespaceId',
        'promptKey' => 'PromptKey',
    ];

    public function validate()
    {
        if (\is_array($this->bizTags)) {
            Model::validateArray($this->bizTags);
        }
        if (\is_array($this->labels)) {
            Model::validateArray($this->labels);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizTags) {
            if (\is_array($this->bizTags)) {
                $res['BizTags'] = [];
                $n1 = 0;
                foreach ($this->bizTags as $item1) {
                    $res['BizTags'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->labels) {
            if (\is_array($this->labels)) {
                $res['Labels'] = [];
                foreach ($this->labels as $key1 => $value1) {
                    $res['Labels'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->namespaceId) {
            $res['NamespaceId'] = $this->namespaceId;
        }

        if (null !== $this->promptKey) {
            $res['PromptKey'] = $this->promptKey;
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
        if (isset($map['BizTags'])) {
            if (!empty($map['BizTags'])) {
                $model->bizTags = [];
                $n1 = 0;
                foreach ($map['BizTags'] as $item1) {
                    $model->bizTags[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Labels'])) {
            if (!empty($map['Labels'])) {
                $model->labels = [];
                foreach ($map['Labels'] as $key1 => $value1) {
                    $model->labels[$key1] = $value1;
                }
            }
        }

        if (isset($map['NamespaceId'])) {
            $model->namespaceId = $map['NamespaceId'];
        }

        if (isset($map['PromptKey'])) {
            $model->promptKey = $map['PromptKey'];
        }

        return $model;
    }
}
