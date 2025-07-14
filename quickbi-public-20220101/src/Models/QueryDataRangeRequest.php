<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models;

use AlibabaCloud\Tea\Model;

class QueryDataRangeRequest extends Model
{
    /**
     * @description Name, for fuzzy search.
     *
     * @example test
     *
     * @var string
     */
    public $keyword;

    /**
     * @description Data range type:
     *
     * - llmCube: LlmCube resource.
     * - llmCubeTheme: Analysis theme.
     *
     * This parameter is required.
     *
     * @example llmCube
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'keyword' => 'Keyword',
        'type' => 'Type',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->keyword) {
            $res['Keyword'] = $this->keyword;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryDataRangeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Keyword'])) {
            $model->keyword = $map['Keyword'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
