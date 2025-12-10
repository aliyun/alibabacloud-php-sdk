<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models\UpdateAssociatedTransferSettingRequest;

use AlibabaCloud\Dara\Model;

class ruleSettings extends Model
{
    /**
     * @var string
     */
    public $associatedResourceType;

    /**
     * @var string
     */
    public $associatedService;

    /**
     * @var string
     */
    public $masterResourceType;

    /**
     * @var string
     */
    public $masterService;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'associatedResourceType' => 'AssociatedResourceType',
        'associatedService' => 'AssociatedService',
        'masterResourceType' => 'MasterResourceType',
        'masterService' => 'MasterService',
        'status' => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->associatedResourceType) {
            $res['AssociatedResourceType'] = $this->associatedResourceType;
        }

        if (null !== $this->associatedService) {
            $res['AssociatedService'] = $this->associatedService;
        }

        if (null !== $this->masterResourceType) {
            $res['MasterResourceType'] = $this->masterResourceType;
        }

        if (null !== $this->masterService) {
            $res['MasterService'] = $this->masterService;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['AssociatedResourceType'])) {
            $model->associatedResourceType = $map['AssociatedResourceType'];
        }

        if (isset($map['AssociatedService'])) {
            $model->associatedService = $map['AssociatedService'];
        }

        if (isset($map['MasterResourceType'])) {
            $model->masterResourceType = $map['MasterResourceType'];
        }

        if (isset($map['MasterService'])) {
            $model->masterService = $map['MasterService'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
