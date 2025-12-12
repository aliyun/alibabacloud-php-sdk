<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20230522\Models\DeleteWhitelistTemplateResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Clickhouse\V20230522\Models\DeleteWhitelistTemplateResponseBody\data\templates\dbInstances;

class templates extends Model
{
    /**
     * @var dbInstances[]
     */
    public $dbInstances;

    /**
     * @var string
     */
    public $securityIPList;

    /**
     * @var string
     */
    public $templateId;
    protected $_name = [
        'dbInstances' => 'DbInstances',
        'securityIPList' => 'SecurityIPList',
        'templateId' => 'TemplateId',
    ];

    public function validate()
    {
        if (\is_array($this->dbInstances)) {
            Model::validateArray($this->dbInstances);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dbInstances) {
            if (\is_array($this->dbInstances)) {
                $res['DbInstances'] = [];
                $n1 = 0;
                foreach ($this->dbInstances as $item1) {
                    $res['DbInstances'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->securityIPList) {
            $res['SecurityIPList'] = $this->securityIPList;
        }

        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
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
        if (isset($map['DbInstances'])) {
            if (!empty($map['DbInstances'])) {
                $model->dbInstances = [];
                $n1 = 0;
                foreach ($map['DbInstances'] as $item1) {
                    $model->dbInstances[$n1] = dbInstances::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['SecurityIPList'])) {
            $model->securityIPList = $map['SecurityIPList'];
        }

        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }

        return $model;
    }
}
