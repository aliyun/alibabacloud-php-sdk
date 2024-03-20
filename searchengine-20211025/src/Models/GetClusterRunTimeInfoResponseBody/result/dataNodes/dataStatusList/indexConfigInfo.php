<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models\GetClusterRunTimeInfoResponseBody\result\dataNodes\dataStatusList;

use AlibabaCloud\Tea\Model;

class indexConfigInfo extends Model
{
    /**
     * @description The name of the index configuration.
     *
     * @example index_meta_name
     *
     * @var string
     */
    public $configMetaName;

    /**
     * @description The version of the index template.
     *
     * @example 1.0.0
     *
     * @var int
     */
    public $version;
    protected $_name = [
        'configMetaName' => 'configMetaName',
        'version'        => 'version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configMetaName) {
            $res['configMetaName'] = $this->configMetaName;
        }
        if (null !== $this->version) {
            $res['version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return indexConfigInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['configMetaName'])) {
            $model->configMetaName = $map['configMetaName'];
        }
        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        return $model;
    }
}
