<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20240330\Models\CreateUmodelRequest\commonSchemaRef;

class CreateUmodelRequest extends Model
{
    /**
     * @var commonSchemaRef[]
     */
    public $commonSchemaRef;

    /**
     * @var string
     */
    public $description;
    protected $_name = [
        'commonSchemaRef' => 'commonSchemaRef',
        'description' => 'description',
    ];

    public function validate()
    {
        if (\is_array($this->commonSchemaRef)) {
            Model::validateArray($this->commonSchemaRef);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->commonSchemaRef) {
            if (\is_array($this->commonSchemaRef)) {
                $res['commonSchemaRef'] = [];
                $n1 = 0;
                foreach ($this->commonSchemaRef as $item1) {
                    $res['commonSchemaRef'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
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
        if (isset($map['commonSchemaRef'])) {
            if (!empty($map['commonSchemaRef'])) {
                $model->commonSchemaRef = [];
                $n1 = 0;
                foreach ($map['commonSchemaRef'] as $item1) {
                    $model->commonSchemaRef[$n1++] = commonSchemaRef::fromMap($item1);
                }
            }
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        return $model;
    }
}
