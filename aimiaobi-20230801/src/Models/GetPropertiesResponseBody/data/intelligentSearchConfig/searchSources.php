<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetPropertiesResponseBody\data\intelligentSearchConfig;

use AlibabaCloud\Tea\Model;

class searchSources extends Model
{
    /**
     * @example xx
     *
     * @var string
     */
    public $code;

    /**
     * @example xx
     *
     * @var string
     */
    public $datasetName;

    /**
     * @example xx
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'code'        => 'Code',
        'datasetName' => 'DatasetName',
        'name'        => 'Name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->datasetName) {
            $res['DatasetName'] = $this->datasetName;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
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
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
