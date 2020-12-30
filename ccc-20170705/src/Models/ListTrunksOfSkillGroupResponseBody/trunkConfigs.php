<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\ListTrunksOfSkillGroupResponseBody;

use AlibabaCloud\Tea\Model;

class trunkConfigs extends Model
{
    /**
     * @var string
     */
    public $providerName;

    /**
     * @var bool
     */
    public $primary;
    protected $_name = [
        'providerName' => 'ProviderName',
        'primary'      => 'Primary',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->providerName) {
            $res['ProviderName'] = $this->providerName;
        }
        if (null !== $this->primary) {
            $res['Primary'] = $this->primary;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return trunkConfigs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProviderName'])) {
            $model->providerName = $map['ProviderName'];
        }
        if (isset($map['Primary'])) {
            $model->primary = $map['Primary'];
        }

        return $model;
    }
}
