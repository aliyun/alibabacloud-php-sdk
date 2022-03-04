<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20181221\Models\DescribeFabricChaincodeDefinitionTaskResponseBody\result;

use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeFabricChaincodeDefinitionTaskResponseBody\result\content\chaincodeDefinition;
use AlibabaCloud\Tea\Model;

class content extends Model
{
    /**
     * @var chaincodeDefinition
     */
    public $chaincodeDefinition;
    protected $_name = [
        'chaincodeDefinition' => 'ChaincodeDefinition',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->chaincodeDefinition) {
            $res['ChaincodeDefinition'] = null !== $this->chaincodeDefinition ? $this->chaincodeDefinition->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return content
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChaincodeDefinition'])) {
            $model->chaincodeDefinition = chaincodeDefinition::fromMap($map['ChaincodeDefinition']);
        }

        return $model;
    }
}
