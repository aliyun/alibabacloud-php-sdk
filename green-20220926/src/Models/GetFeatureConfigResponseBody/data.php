<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220926\Models\GetFeatureConfigResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var mixed[][]
     */
    public $featureConf;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var string
     */
    public $serviceCode;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $uid;
    protected $_name = [
        'featureConf' => 'FeatureConf',
        'resourceType' => 'ResourceType',
        'serviceCode' => 'ServiceCode',
        'type' => 'Type',
        'uid' => 'Uid',
    ];

    public function validate()
    {
        if (\is_array($this->featureConf)) {
            Model::validateArray($this->featureConf);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->featureConf) {
            if (\is_array($this->featureConf)) {
                $res['FeatureConf'] = [];
                $n1 = 0;
                foreach ($this->featureConf as $item1) {
                    if (\is_array($item1)) {
                        $res['FeatureConf'][$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $res['FeatureConf'][$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }

        if (null !== $this->serviceCode) {
            $res['ServiceCode'] = $this->serviceCode;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->uid) {
            $res['Uid'] = $this->uid;
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
        if (isset($map['FeatureConf'])) {
            if (!empty($map['FeatureConf'])) {
                $model->featureConf = [];
                $n1 = 0;
                foreach ($map['FeatureConf'] as $item1) {
                    if (!empty($item1)) {
                        $model->featureConf[$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $model->featureConf[$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        if (isset($map['ServiceCode'])) {
            $model->serviceCode = $map['ServiceCode'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['Uid'])) {
            $model->uid = $map['Uid'];
        }

        return $model;
    }
}
