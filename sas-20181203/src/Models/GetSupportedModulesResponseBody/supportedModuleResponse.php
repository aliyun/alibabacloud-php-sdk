<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetSupportedModulesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetSupportedModulesResponseBody\supportedModuleResponse\supportedModules;

class supportedModuleResponse extends Model
{
    /**
     * @var supportedModules[]
     */
    public $supportedModules;
    /**
     * @var string
     */
    public $vendor;
    protected $_name = [
        'supportedModules' => 'SupportedModules',
        'vendor'           => 'Vendor',
    ];

    public function validate()
    {
        if (\is_array($this->supportedModules)) {
            Model::validateArray($this->supportedModules);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->supportedModules) {
            if (\is_array($this->supportedModules)) {
                $res['SupportedModules'] = [];
                $n1                      = 0;
                foreach ($this->supportedModules as $item1) {
                    $res['SupportedModules'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->vendor) {
            $res['Vendor'] = $this->vendor;
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
        if (isset($map['SupportedModules'])) {
            if (!empty($map['SupportedModules'])) {
                $model->supportedModules = [];
                $n1                      = 0;
                foreach ($map['SupportedModules'] as $item1) {
                    $model->supportedModules[$n1++] = supportedModules::fromMap($item1);
                }
            }
        }

        if (isset($map['Vendor'])) {
            $model->vendor = $map['Vendor'];
        }

        return $model;
    }
}
