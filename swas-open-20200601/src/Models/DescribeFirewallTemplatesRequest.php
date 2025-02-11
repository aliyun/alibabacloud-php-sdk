<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SWASOPEN\V20200601\Models;

use AlibabaCloud\Dara\Model;

class DescribeFirewallTemplatesRequest extends Model
{
    /**
     * @var string[]
     */
    public $firewallTemplateId;
    /**
     * @var string
     */
    public $name;
    /**
     * @var int
     */
    public $pageNumber;
    /**
     * @var int
     */
    public $pageSize;
    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'firewallTemplateId' => 'FirewallTemplateId',
        'name'               => 'Name',
        'pageNumber'         => 'PageNumber',
        'pageSize'           => 'PageSize',
        'regionId'           => 'RegionId',
    ];

    public function validate()
    {
        if (\is_array($this->firewallTemplateId)) {
            Model::validateArray($this->firewallTemplateId);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->firewallTemplateId) {
            if (\is_array($this->firewallTemplateId)) {
                $res['FirewallTemplateId'] = [];
                $n1                        = 0;
                foreach ($this->firewallTemplateId as $item1) {
                    $res['FirewallTemplateId'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['FirewallTemplateId'])) {
            if (!empty($map['FirewallTemplateId'])) {
                $model->firewallTemplateId = [];
                $n1                        = 0;
                foreach ($map['FirewallTemplateId'] as $item1) {
                    $model->firewallTemplateId[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
