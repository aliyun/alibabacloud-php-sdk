<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetModuleConfigStatusResponseBody;

use AlibabaCloud\SDK\Sas\V20181203\Models\GetModuleConfigStatusResponseBody\data\moduleConfigResults;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The check results of the service modules.
     *
     * @var moduleConfigResults[]
     */
    public $moduleConfigResults;
    protected $_name = [
        'moduleConfigResults' => 'ModuleConfigResults',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->moduleConfigResults) {
            $res['ModuleConfigResults'] = [];
            if (null !== $this->moduleConfigResults && \is_array($this->moduleConfigResults)) {
                $n = 0;
                foreach ($this->moduleConfigResults as $item) {
                    $res['ModuleConfigResults'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ModuleConfigResults'])) {
            if (!empty($map['ModuleConfigResults'])) {
                $model->moduleConfigResults = [];
                $n = 0;
                foreach ($map['ModuleConfigResults'] as $item) {
                    $model->moduleConfigResults[$n++] = null !== $item ? moduleConfigResults::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
