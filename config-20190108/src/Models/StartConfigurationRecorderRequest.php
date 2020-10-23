<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20190108\Models;

use AlibabaCloud\Tea\Model;

class StartConfigurationRecorderRequest extends Model
{
    /**
     * @var bool
     */
    public $enterpriseEdition;
    protected $_name = [
        'enterpriseEdition' => 'EnterpriseEdition',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->enterpriseEdition) {
            $res['EnterpriseEdition'] = $this->enterpriseEdition;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StartConfigurationRecorderRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EnterpriseEdition'])) {
            $model->enterpriseEdition = $map['EnterpriseEdition'];
        }

        return $model;
    }
}
