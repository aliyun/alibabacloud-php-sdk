<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetUmodelResponseBody\commonSchemaRef;

class GetUmodelResponseBody extends Model
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
    public $regionId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $workspace;
    protected $_name = [
        'commonSchemaRef' => 'commonSchemaRef',
        'description' => 'description',
        'regionId' => 'regionId',
        'requestId' => 'requestId',
        'workspace' => 'workspace',
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

        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->workspace) {
            $res['workspace'] = $this->workspace;
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

        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['workspace'])) {
            $model->workspace = $map['workspace'];
        }

        return $model;
    }
}
