<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\ListSessionClustersResponseBody\sessionClusters;

use AlibabaCloud\Dara\Model;

class applicationConfigs extends Model
{
    /**
     * @var string
     */
    public $configFileName;

    /**
     * @var string
     */
    public $configItemKey;

    /**
     * @var string
     */
    public $configItemValue;
    protected $_name = [
        'configFileName' => 'configFileName',
        'configItemKey' => 'configItemKey',
        'configItemValue' => 'configItemValue',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->configFileName) {
            $res['configFileName'] = $this->configFileName;
        }

        if (null !== $this->configItemKey) {
            $res['configItemKey'] = $this->configItemKey;
        }

        if (null !== $this->configItemValue) {
            $res['configItemValue'] = $this->configItemValue;
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
        if (isset($map['configFileName'])) {
            $model->configFileName = $map['configFileName'];
        }

        if (isset($map['configItemKey'])) {
            $model->configItemKey = $map['configItemKey'];
        }

        if (isset($map['configItemValue'])) {
            $model->configItemValue = $map['configItemValue'];
        }

        return $model;
    }
}
