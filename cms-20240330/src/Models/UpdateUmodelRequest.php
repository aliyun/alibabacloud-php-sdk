<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\SDK\Cms\V20240330\Models\UpdateUmodelRequest\commonSchemaRef;
use AlibabaCloud\Tea\Model;

class UpdateUmodelRequest extends Model
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
    protected $_name = [
        'commonSchemaRef' => 'commonSchemaRef',
        'description' => 'description',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateUmodelRequest
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

        return $model;
    }
}
