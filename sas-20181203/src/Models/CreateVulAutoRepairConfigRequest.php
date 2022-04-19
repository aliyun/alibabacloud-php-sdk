<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\CreateVulAutoRepairConfigRequest\vulAutoRepairConfigList;
use AlibabaCloud\Tea\Model;

class CreateVulAutoRepairConfigRequest extends Model
{
    /**
     * @var string
     */
    public $reason;

    /**
     * @description 漏洞类型
     *
     * @var string
     */
    public $type;

    /**
     * @var vulAutoRepairConfigList[]
     */
    public $vulAutoRepairConfigList;
    protected $_name = [
        'reason'                  => 'Reason',
        'type'                    => 'Type',
        'vulAutoRepairConfigList' => 'VulAutoRepairConfigList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->vulAutoRepairConfigList) {
            $res['VulAutoRepairConfigList'] = [];
            if (null !== $this->vulAutoRepairConfigList && \is_array($this->vulAutoRepairConfigList)) {
                $n = 0;
                foreach ($this->vulAutoRepairConfigList as $item) {
                    $res['VulAutoRepairConfigList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateVulAutoRepairConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['VulAutoRepairConfigList'])) {
            if (!empty($map['VulAutoRepairConfigList'])) {
                $model->vulAutoRepairConfigList = [];
                $n                              = 0;
                foreach ($map['VulAutoRepairConfigList'] as $item) {
                    $model->vulAutoRepairConfigList[$n++] = null !== $item ? vulAutoRepairConfigList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
