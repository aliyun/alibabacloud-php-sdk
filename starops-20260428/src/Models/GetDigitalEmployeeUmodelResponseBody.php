<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\STAROps\V20260428\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\STAROps\V20260428\Models\GetDigitalEmployeeUmodelResponseBody\commonSchemaRef;

class GetDigitalEmployeeUmodelResponseBody extends Model
{
    /**
     * @var commonSchemaRef[]
     */
    public $commonSchemaRef;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'commonSchemaRef' => 'commonSchemaRef',
        'description' => 'description',
        'name' => 'name',
        'requestId' => 'requestId',
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
                    $res['commonSchemaRef'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
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
                    $model->commonSchemaRef[$n1] = commonSchemaRef::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
