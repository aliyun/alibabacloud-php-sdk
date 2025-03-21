<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchGenerationRequest\chatConfig\searchParam;

use AlibabaCloud\Tea\Model;

class searchSources extends Model
{
    /**
     * @example SystemSearch
     *
     * @var string
     */
    public $code;

    /**
     * @example QuarkCommonNews
     *
     * @var string
     */
    public $datasetName;
    protected $_name = [
        'code' => 'Code',
        'datasetName' => 'DatasetName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->datasetName) {
            $res['DatasetName'] = $this->datasetName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return searchSources
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['DatasetName'])) {
            $model->datasetName = $map['DatasetName'];
        }

        return $model;
    }
}
