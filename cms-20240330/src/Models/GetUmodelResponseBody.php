<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\SDK\Cms\V20240330\Models\GetUmodelResponseBody\commonSchemaRef;
use AlibabaCloud\Tea\Model;

class GetUmodelResponseBody extends Model
{
    /**
     * @var commonSchemaRef[]
     */
    public $commonSchemaRef;

    /**
     * @example workspace test
     *
     * @var string
     */
    public $description;

    /**
     * @example cn-heyuan
     *
     * @var string
     */
    public $regionId;

    /**
     * @example 123-123123-sdf-435-3123
     *
     * @var string
     */
    public $requestId;

    /**
     * @example workspace-test
     *
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

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->commonSchemaRef) {
            $res['commonSchemaRef'] = [];
            if (null !== $this->commonSchemaRef && \is_array($this->commonSchemaRef)) {
                $n = 0;
                foreach ($this->commonSchemaRef as $item) {
                    $res['commonSchemaRef'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return GetUmodelResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['commonSchemaRef'])) {
            if (!empty($map['commonSchemaRef'])) {
                $model->commonSchemaRef = [];
                $n = 0;
                foreach ($map['commonSchemaRef'] as $item) {
                    $model->commonSchemaRef[$n++] = null !== $item ? commonSchemaRef::fromMap($item) : $item;
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
