<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class DeleteVulAutoRepairConfigRequest extends Model
{
    /**
     * @var string
     */
    public $aliasName;
    /**
     * @var int[]
     */
    public $configIdList;
    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'aliasName'    => 'AliasName',
        'configIdList' => 'ConfigIdList',
        'type'         => 'Type',
    ];

    public function validate()
    {
        if (\is_array($this->configIdList)) {
            Model::validateArray($this->configIdList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aliasName) {
            $res['AliasName'] = $this->aliasName;
        }

        if (null !== $this->configIdList) {
            if (\is_array($this->configIdList)) {
                $res['ConfigIdList'] = [];
                $n1                  = 0;
                foreach ($this->configIdList as $item1) {
                    $res['ConfigIdList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['AliasName'])) {
            $model->aliasName = $map['AliasName'];
        }

        if (isset($map['ConfigIdList'])) {
            if (!empty($map['ConfigIdList'])) {
                $model->configIdList = [];
                $n1                  = 0;
                foreach ($map['ConfigIdList'] as $item1) {
                    $model->configIdList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
