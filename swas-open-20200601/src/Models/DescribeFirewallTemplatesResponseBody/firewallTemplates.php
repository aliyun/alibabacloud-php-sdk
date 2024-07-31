<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SWASOPEN\V20200601\Models\DescribeFirewallTemplatesResponseBody;

use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\DescribeFirewallTemplatesResponseBody\firewallTemplates\firewallTemplateRules;
use AlibabaCloud\Tea\Model;

class firewallTemplates extends Model
{
    /**
     * @description The time when the firewall template was created. The time follows the [ISO 8601](https://help.aliyun.com/document_detail/25696.html) standard in the yyyy-MM-ddTHH:mm:ssZ format. The time is displayed in UTC.
     *
     * >  The time displayed in the Simple Application Server console is in the format of UTC+8.
     * @example 2024-04-29T02:01:38Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The time when the firewall template was created. The time follows the [ISO 8601](https://help.aliyun.com/document_detail/25696.html) standard in the yyyy-MM-ddTHH:mm:ssZ format. The time is displayed in UTC.
     *
     * @example 2024-04-10T02:10:14Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The description of the firewall template.
     *
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the firewall template.
     *
     * @example ft-bcf1a7hrdq717****
     *
     * @var string
     */
    public $firewallTemplateId;

    /**
     * @description The details of the firewall template rules.
     *
     * @var firewallTemplateRules[]
     */
    public $firewallTemplateRules;

    /**
     * @description The name of the firewall template.
     *
     * @example test
     *
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
    }

    public function toMap()
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
            $res['FirewallTemplateRules'] = [];
            if (null !== $this->firewallTemplateRules && \is_array($this->firewallTemplateRules)) {
                $n = 0;
                foreach ($this->firewallTemplateRules as $item) {
                    $res['FirewallTemplateRules'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return firewallTemplates
     */
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
                $n                            = 0;
                foreach ($map['FirewallTemplateRules'] as $item) {
                    $model->firewallTemplateRules[$n++] = null !== $item ? firewallTemplateRules::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
