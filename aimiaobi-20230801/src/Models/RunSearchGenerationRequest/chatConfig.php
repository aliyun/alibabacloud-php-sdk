<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchGenerationRequest;

use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchGenerationRequest\chatConfig\searchParam;
use AlibabaCloud\Tea\Model;

class chatConfig extends Model
{
    /**
     * @example concise
     *
     * @var string
     */
    public $generateLevel;

    /**
     * @example copilotPrecise
     *
     * @var string
     */
    public $generateTechnology;

    /**
     * @var string[]
     */
    public $searchModels;

    /**
     * @var searchParam
     */
    public $searchParam;
    protected $_name = [
        'generateLevel'      => 'GenerateLevel',
        'generateTechnology' => 'GenerateTechnology',
        'searchModels'       => 'SearchModels',
        'searchParam'        => 'SearchParam',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->generateLevel) {
            $res['GenerateLevel'] = $this->generateLevel;
        }
        if (null !== $this->generateTechnology) {
            $res['GenerateTechnology'] = $this->generateTechnology;
        }
        if (null !== $this->searchModels) {
            $res['SearchModels'] = $this->searchModels;
        }
        if (null !== $this->searchParam) {
            $res['SearchParam'] = null !== $this->searchParam ? $this->searchParam->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return chatConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GenerateLevel'])) {
            $model->generateLevel = $map['GenerateLevel'];
        }
        if (isset($map['GenerateTechnology'])) {
            $model->generateTechnology = $map['GenerateTechnology'];
        }
        if (isset($map['SearchModels'])) {
            if (!empty($map['SearchModels'])) {
                $model->searchModels = $map['SearchModels'];
            }
        }
        if (isset($map['SearchParam'])) {
            $model->searchParam = searchParam::fromMap($map['SearchParam']);
        }

        return $model;
    }
}
