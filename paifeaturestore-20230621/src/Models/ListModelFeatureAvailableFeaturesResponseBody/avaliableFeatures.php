<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\ListModelFeatureAvailableFeaturesResponseBody;

use AlibabaCloud\Tea\Model;

class avaliableFeatures extends Model
{
    /**
     * @example age
     *
     * @var string
     */
    public $name;

    /**
     * @example user_fea
     *
     * @var string
     */
    public $sourceName;

    /**
     * @example FeatureView
     *
     * @var string
     */
    public $sourceType;

    /**
     * @example STRING
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'name'       => 'Name',
        'sourceName' => 'SourceName',
        'sourceType' => 'SourceType',
        'type'       => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->sourceName) {
            $res['SourceName'] = $this->sourceName;
        }
        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return avaliableFeatures
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['SourceName'])) {
            $model->sourceName = $map['SourceName'];
        }
        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
