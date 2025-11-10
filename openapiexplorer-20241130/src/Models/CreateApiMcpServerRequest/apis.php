<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenAPIExplorer\V20241130\Models\CreateApiMcpServerRequest;

use AlibabaCloud\Dara\Model;

class apis extends Model
{
    /**
     * @var string
     */
    public $apiVersion;

    /**
     * @var string
     */
    public $product;

    /**
     * @var string[]
     */
    public $selectors;
    protected $_name = [
        'apiVersion' => 'apiVersion',
        'product' => 'product',
        'selectors' => 'selectors',
    ];

    public function validate()
    {
        if (\is_array($this->selectors)) {
            Model::validateArray($this->selectors);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiVersion) {
            $res['apiVersion'] = $this->apiVersion;
        }

        if (null !== $this->product) {
            $res['product'] = $this->product;
        }

        if (null !== $this->selectors) {
            if (\is_array($this->selectors)) {
                $res['selectors'] = [];
                $n1 = 0;
                foreach ($this->selectors as $item1) {
                    $res['selectors'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['apiVersion'])) {
            $model->apiVersion = $map['apiVersion'];
        }

        if (isset($map['product'])) {
            $model->product = $map['product'];
        }

        if (isset($map['selectors'])) {
            if (!empty($map['selectors'])) {
                $model->selectors = [];
                $n1 = 0;
                foreach ($map['selectors'] as $item1) {
                    $model->selectors[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
