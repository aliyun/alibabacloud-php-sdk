<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\UpdateStandardRequest\updateCommand;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\UpdateStandardRequest\updateCommand\standardGeneralMonitorConfig\standardMonitorConfigList;

class standardGeneralMonitorConfig extends Model
{
    /**
     * @var standardMonitorConfigList[]
     */
    public $standardMonitorConfigList;
    protected $_name = [
        'standardMonitorConfigList' => 'StandardMonitorConfigList',
    ];

    public function validate()
    {
        if (\is_array($this->standardMonitorConfigList)) {
            Model::validateArray($this->standardMonitorConfigList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->standardMonitorConfigList) {
            if (\is_array($this->standardMonitorConfigList)) {
                $res['StandardMonitorConfigList'] = [];
                $n1 = 0;
                foreach ($this->standardMonitorConfigList as $item1) {
                    $res['StandardMonitorConfigList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['StandardMonitorConfigList'])) {
            if (!empty($map['StandardMonitorConfigList'])) {
                $model->standardMonitorConfigList = [];
                $n1 = 0;
                foreach ($map['StandardMonitorConfigList'] as $item1) {
                    $model->standardMonitorConfigList[$n1] = standardMonitorConfigList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
