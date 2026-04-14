<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetScenegroupResponseBody\managementOptions;

class GetScenegroupResponseBody extends Model
{
    /**
     * @var string
     */
    public $groupUrl;

    /**
     * @var string
     */
    public $icon;

    /**
     * @var managementOptions
     */
    public $managementOptions;

    /**
     * @var string
     */
    public $openConversationId;

    /**
     * @var string
     */
    public $ownerStaffId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string[]
     */
    public $subAdminStaffIds;

    /**
     * @var string
     */
    public $templateId;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $vendorRequestId;

    /**
     * @var string
     */
    public $vendorType;
    protected $_name = [
        'groupUrl' => 'groupUrl',
        'icon' => 'icon',
        'managementOptions' => 'managementOptions',
        'openConversationId' => 'openConversationId',
        'ownerStaffId' => 'ownerStaffId',
        'requestId' => 'requestId',
        'subAdminStaffIds' => 'subAdminStaffIds',
        'templateId' => 'templateId',
        'title' => 'title',
        'vendorRequestId' => 'vendorRequestId',
        'vendorType' => 'vendorType',
    ];

    public function validate()
    {
        if (null !== $this->managementOptions) {
            $this->managementOptions->validate();
        }
        if (\is_array($this->subAdminStaffIds)) {
            Model::validateArray($this->subAdminStaffIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->groupUrl) {
            $res['groupUrl'] = $this->groupUrl;
        }

        if (null !== $this->icon) {
            $res['icon'] = $this->icon;
        }

        if (null !== $this->managementOptions) {
            $res['managementOptions'] = null !== $this->managementOptions ? $this->managementOptions->toArray($noStream) : $this->managementOptions;
        }

        if (null !== $this->openConversationId) {
            $res['openConversationId'] = $this->openConversationId;
        }

        if (null !== $this->ownerStaffId) {
            $res['ownerStaffId'] = $this->ownerStaffId;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->subAdminStaffIds) {
            if (\is_array($this->subAdminStaffIds)) {
                $res['subAdminStaffIds'] = [];
                $n1 = 0;
                foreach ($this->subAdminStaffIds as $item1) {
                    $res['subAdminStaffIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->templateId) {
            $res['templateId'] = $this->templateId;
        }

        if (null !== $this->title) {
            $res['title'] = $this->title;
        }

        if (null !== $this->vendorRequestId) {
            $res['vendorRequestId'] = $this->vendorRequestId;
        }

        if (null !== $this->vendorType) {
            $res['vendorType'] = $this->vendorType;
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
        if (isset($map['groupUrl'])) {
            $model->groupUrl = $map['groupUrl'];
        }

        if (isset($map['icon'])) {
            $model->icon = $map['icon'];
        }

        if (isset($map['managementOptions'])) {
            $model->managementOptions = managementOptions::fromMap($map['managementOptions']);
        }

        if (isset($map['openConversationId'])) {
            $model->openConversationId = $map['openConversationId'];
        }

        if (isset($map['ownerStaffId'])) {
            $model->ownerStaffId = $map['ownerStaffId'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['subAdminStaffIds'])) {
            if (!empty($map['subAdminStaffIds'])) {
                $model->subAdminStaffIds = [];
                $n1 = 0;
                foreach ($map['subAdminStaffIds'] as $item1) {
                    $model->subAdminStaffIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['templateId'])) {
            $model->templateId = $map['templateId'];
        }

        if (isset($map['title'])) {
            $model->title = $map['title'];
        }

        if (isset($map['vendorRequestId'])) {
            $model->vendorRequestId = $map['vendorRequestId'];
        }

        if (isset($map['vendorType'])) {
            $model->vendorType = $map['vendorType'];
        }

        return $model;
    }
}
