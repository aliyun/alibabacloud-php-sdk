<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;

class UpdateSourceRequest extends Model
{
    /**
     * @var string
     */
    public $httpPackageConfigurations;
    /**
     * @var string
     */
    public $sourceLocationName;
    /**
     * @var string
     */
    public $sourceName;
    /**
     * @var string
     */
    public $sourceType;
    protected $_name = [
        'httpPackageConfigurations' => 'HttpPackageConfigurations',
        'sourceLocationName'        => 'SourceLocationName',
        'sourceName'                => 'SourceName',
        'sourceType'                => 'SourceType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->httpPackageConfigurations) {
            $res['HttpPackageConfigurations'] = $this->httpPackageConfigurations;
        }

        if (null !== $this->sourceLocationName) {
            $res['SourceLocationName'] = $this->sourceLocationName;
        }

        if (null !== $this->sourceName) {
            $res['SourceName'] = $this->sourceName;
        }

        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
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
        if (isset($map['HttpPackageConfigurations'])) {
            $model->httpPackageConfigurations = $map['HttpPackageConfigurations'];
        }

        if (isset($map['SourceLocationName'])) {
            $model->sourceLocationName = $map['SourceLocationName'];
        }

        if (isset($map['SourceName'])) {
            $model->sourceName = $map['SourceName'];
        }

        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }

        return $model;
    }
}
