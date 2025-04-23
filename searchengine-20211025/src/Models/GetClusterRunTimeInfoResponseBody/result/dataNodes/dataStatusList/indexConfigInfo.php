<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models\GetClusterRunTimeInfoResponseBody\result\dataNodes\dataStatusList;

use AlibabaCloud\Dara\Model;

class indexConfigInfo extends Model
{
    /**
     * @var string
     */
    public $configMetaName;

    /**
     * @var int
     */
    public $version;
    protected $_name = [
        'configMetaName' => 'configMetaName',
        'version' => 'version',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
