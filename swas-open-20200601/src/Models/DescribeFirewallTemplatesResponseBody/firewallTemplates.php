<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SWASOPEN\V20200601\Models\DescribeFirewallTemplatesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\DescribeFirewallTemplatesResponseBody\firewallTemplates\firewallTemplateRules;

class firewallTemplates extends Model
{
    /**
     * @var string
     */
    public $createTime;
    /**
     * @var string
     */
    public $creationTime;
    /**
     * @var string
     */
    public $description;
    /**
     * @var string
     */
    public $firewallTemplateId;
    /**
     * @var firewallTemplateRules[]
     */
    public $firewallTemplateRules;
    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'createTime'            => 'CreateTime',
        'creationTime'          => 'CreationTime',
        'description'           => 'Description',
        'firewallTemplateId'    => 'FirewallTemplateId',
        'firewallTemplateRules' => 'FirewallTemplateRules',
        'name'                  => 'Name',
    ];

    public function validate()
    {
        if (\is_array($this->firewallTemplateRules)) {
            Model::validateArray($this->firewallTemplateRules);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->firewallTemplateId) {
            $res['FirewallTemplateId'] = $this->firewallTemplateId;
        }

        if (null !== $this->firewallTemplateRules) {
            if (\is_array($this->firewallTemplateRules)) {
                $res['FirewallTemplateRules'] = [];
                $n1                           = 0;
                foreach ($this->firewallTemplateRules as $item1) {
                    $res['FirewallTemplateRules'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['FirewallTemplateId'])) {
            $model->firewallTemplateId = $map['FirewallTemplateId'];
        }

        if (isset($map['FirewallTemplateRules'])) {
            if (!empty($map['FirewallTemplateRules'])) {
                $model->firewallTemplateRules = [];
                $n1                           = 0;
                foreach ($map['FirewallTemplateRules'] as $item1) {
                    $model->firewallTemplateRules[$n1++] = firewallTemplateRules::fromMap($item1);
                }
            }
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
