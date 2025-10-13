<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\InstallPluginResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\APIG\V20240327\Models\InstallPluginResponseBody\data\installPluginResults;

class data extends Model
{
    /**
     * @var installPluginResults[]
     */
    public $installPluginResults;
    protected $_name = [
        'installPluginResults' => 'installPluginResults',
    ];

    public function validate()
    {
        if (\is_array($this->installPluginResults)) {
            Model::validateArray($this->installPluginResults);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->installPluginResults) {
            if (\is_array($this->installPluginResults)) {
                $res['installPluginResults'] = [];
                $n1 = 0;
                foreach ($this->installPluginResults as $item1) {
                    $res['installPluginResults'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['installPluginResults'])) {
            if (!empty($map['installPluginResults'])) {
                $model->installPluginResults = [];
                $n1 = 0;
                foreach ($map['installPluginResults'] as $item1) {
                    $model->installPluginResults[$n1] = installPluginResults::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
